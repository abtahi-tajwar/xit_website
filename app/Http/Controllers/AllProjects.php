<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Data;

class AllProjects extends Controller
{
    //
    function init()
    {
        $projects = Data::fetchProjects();
        return view('admin.allprojects', ['projects' => $projects]);
    }
}
