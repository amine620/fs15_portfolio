<?php

namespace App\Http\Controllers;

use App\Models\Project as ModelsProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class dashboardController extends Controller
{
 
    public function dashboard()
    {
        return view('backoffice.dash.index');
    }

    public function myProjects()
    {
        $project=ModelsProject::where('user_id', Auth::user()->id)->get();
       return view('backoffice.dash.projects',['projects' =>$project]);
    }

    public function deleteProject($id)
    {
       $project=ModelsProject::find($id);
       $project->delete();
       return redirect('projects');
    }

    public function updateProject($id)
    {
        $project=ModelsProject::find($id);
       return view('backoffice.dash.updateForm',['project'=>$project]);
    }

    public function edit(Request $req, $id)
    {
        $project= ModelsProject::find($id);
        $project->title=$req->title;
        $project->description=$req->description;
        if ($req->hasFile('image')) {
            $path=$req->image->store('images');
        }
        $project->image=$path;
        $project->github_url=$req->github_url;
        $project->save();
        return redirect('projects');


    }
   
}
