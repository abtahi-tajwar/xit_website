<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Data;

class AllProjects extends Controller
{
    //
    function init()
    {
        $projects = json_decode(Data::fetchProjects(), true);
        return view('admin.allprojects', ['projects' => $projects, true]);
    }
    function deleteProject($id)
    {
        Project::where('id', $id)->delete();
        return redirect(route('admin-all-projects'));
    }
}
