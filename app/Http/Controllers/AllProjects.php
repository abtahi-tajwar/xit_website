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
    static function searchProject($title) {
        $projects = Data::searchData('projects', 'title', $title);
        return $projects;
    }
    function asyncSearchProject(Request $request)
    {
        $req = json_decode($request->getContent(), true);
        $projects = AllProjects::searchProject($req['title']);
        file_put_contents('abc.txt', json_encode($projects));
        return json_encode($projects);
    }
}
