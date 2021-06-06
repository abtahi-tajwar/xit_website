<?php

namespace App\Http\Controllers;
use App\Member;
use App\Project;
use App\FAQ;
use Illuminate\Http\Request;


class Data extends Controller
{
    //    
    static function fetchJSONData($filename)
    {
        $path = storage_path() . "/json/info.json";
        $json = json_decode(file_get_contents($path)); 
        return $json;
    }
    static function fetchMembers()
    {
        return Member::all();
    }
    static function fetchProjects()
    {
        return Project::all();
    }
    static function fetchFaq()
    {
        return FAQ::all();
    }
}
