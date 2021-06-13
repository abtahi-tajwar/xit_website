<?php

namespace App\Http\Controllers;
use DateTime;

use Illuminate\Http\Request;
use App\Slideshow;

class SlideshowController extends Controller
{
    //
    function init($id)
    {
        $images = null;
        if(intval($id) !== 0) {
            $images = Slideshow::where('project_id', $id)->get();
        }
        return view('admin.slideshow', [ 'id' => intval($id), 'images' => $images ]);
    }
    function uploadSlideshowImage(Request $request) 
    {
        $id = $request->input('id');
        $images= Data::getSlideshowImageByOrder($id);
        $img_numbers = count($images);
        foreach ($request->file('slideshow_images') as $image) {
            $date = new DateTime();
            $filesName = $date->getTimestamp().'-'.$image->getClientOriginalName();  
            $image->move(public_path('../images/portfolios'), $filesName);

            $slideshow = new Slideshow;
            $slideshow->project_id = $request->input('id');
            $slideshow->images = $filesName;
            $img_numbers++;
            $slideshow->img_order = $img_numbers;  
            $slideshow->save();          
        }
        $images= Data::getSlideshowImageByOrder($id);
        return view('admin.slideshow', [ 'id' => intval($id), 'images' => json_decode($images,1) ]);
    }
}
