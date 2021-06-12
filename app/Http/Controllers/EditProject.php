<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\ProjectDescription;

class EditProject extends Controller
{
    //
    function init($id)
    {
        $project = Project::where('id', $id)->get();
        return view('admin.editproject', ['project' => json_decode($project, 1)]);
    }
    function editProject(Request $req)
    {
        
        $project = Project::find($req->input('id'));
        //dd($project);
        $project->title = $req->input('project-title');
        $project->description = $req->input('project-description');
        $project_features = $req->input('project-feature'); 
        $project_features_string = "";
        if($project_features !== null) {
            $project_features_string = implode(",", $project_features);
        }        
        $project->feature_list = $project_features_string;
        $project->category = $req->input('project-category');
        $project->date = $req->input('project-date');
        $project->update();

        $ProjectDescription = ProjectDescription::where('project_id', $req->input('id'))->get()->first();
        $ProjectDescription->description = $req->input('project-description');
        $ProjectDescription->feature_list = $project_features_string; 
        $ProjectDescription->update();  

        return redirect(route('admin-all-projects'));
    }
    function editActiveStatus(Request $request) {
        $req = json_decode($request->getContent(), true);
        $project = Project::find($req['id']);
        $project->active = $req['checked'];
        $project->update();
        //$req = json_decode($request->getContent(), true);
        // $project = Project::find($req['id']);
        // $project->active = $req['checked'];
        return $req;
    }
}
