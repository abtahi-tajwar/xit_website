<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Data;

use App\Project;
use App\ProjectDescription;

class SingleProject extends Controller
{
    //
    function initSinglePage(Request $request, $id)
    {
        $data = Data::fetchJSONData('info.json');
        $faq = Data::fetchFaq($id);
        $description = Data::fetchProjectDesc($id);
        $img = Data::fetchProjectImage($id);
        $images = Data::fetchProjectSlideshow($id);
        return view('single-project', [
            'id' => $id,
            'data' => $data, 
            'faq' => $faq,
            'description' => json_decode($description, 1),
            'img' => json_decode($img, 1),
            'images' => json_decode($images, 1)
        ]);
    }
    function addProject(Request $req) {

        $project_features = $req->input('project-feature');
        
        $project_features_string = "";
        $project_features_string = implode(",", $project_features);

        $project = new Project;
        $project->title = $req->input('project-title');
        $project->category = $req->input('project-category');
        $project->date = $req->input('project-date');
        $project->description = $req->input('project-description');
        $project->image = 'noproject.png';
        $project->feature_list = $project_features_string;
        $project->save();

        $ProjectDescription = new ProjectDescription;
        $ProjectDescription->project_id = $project->id;
        $ProjectDescription->description = $project->description;
        $ProjectDescription->feature_list = $project->feature_list;
        $ProjectDescription->save();


        return redirect()->route('admin-create-project');

    }
}
