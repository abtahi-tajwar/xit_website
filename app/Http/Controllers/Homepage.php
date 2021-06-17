<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Data;


class Homepage extends Controller
{    
    function initHomePage()
    {
        $path = storage_path() . "\json\info.json";        
        $data = Data::fetchJSONData('info.json');
        $members = Data::fetchMembers();
        $projects = Data::fetchActiveProjects();
        return view('welcome', ['data' => $data, 'path' => $path, 'members' => $members, 'projects' => $projects]);
    }
}
