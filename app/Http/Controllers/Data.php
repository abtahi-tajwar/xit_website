<?php

namespace App\Http\Controllers;
use App\Member;
use App\Project;
use App\FAQ;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class Data extends Controller
{
    //    
    static function fetchJSONData($filename)
    {
        $path = storage_path() . "/json/" . $filename;
        $json = json_decode(file_get_contents($path)); 
        return $json;
    }
    static function writeJSON($data, $filename)
    {
        $path = storage_path() . "/json/" . $filename;
        file_put_contents($path, $data); 
    }
    static function getWebsiteInfo()
    {
        $data = Data::fetchJSONData('info.json');
        return $data;
    }
    static function updateWebsiteInfo($data)
    {
        Data::writeJSON(json_encode($data), 'info.json');
    }
    static function fetchMembers()
    {
        return Member::all();
    }
    static function fetchProjects()
    {
        return Project::all();
    }
    static function fetchFaq($project_id)
    {
        return FAQ::where('project_id', $project_id)
                    ->get();
    }
    static function fetchProjectDesc($project_id)
    {
        $desc = DB::table('project_description')
                    ->where('project_id', $project_id)
                    ->get();
        return $desc;
    }
    static function fetchProjectImage($project_id)
    {
        $img = DB::table('project_image')
                    ->where('project_id', $project_id)
                    ->get();
        return $img;
    }
    static function fetchProjectSlideshow($project_id)
    {
        $images = DB::table('project_slideshow')
                    ->where('project_id', $project_id)
                    ->get();
        return $images;
    }
    static function searchData($table_name, $col, $value)
    {
        $data = DB::select("SELECT * FROM `".$table_name."` WHERE (".$col." LIKE '".$value."%') LIMIT 5");
        return $data;
    }
    static function getSlideshowImageByOrder($project_id)
    {
        $images = DB::table('project_slideshow')
                    ->where('project_id', $project_id)
                    ->orderBy('img_order', 'asc')
                    ->get();

        return $images;
    }
}

