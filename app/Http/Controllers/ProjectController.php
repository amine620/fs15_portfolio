<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
   public function Projects()
   {
      $project=Project::where('user_id', Auth::user()->id)->get();
    return view('pages.projects',['projects'=>$project]);
   }

   public function addNewProject()
   {
    return view('backoffice.dash.addNewProject');
   }


   public function updateProfile(Request $req)
   {
       $project=new Project();
       $project->title=$req->title;
       $project->description=$req->description;
      if ($req->hasFile('image')) {
         $path=$req->image->store('images');}
      $project->image=$path;
      $project->github_url=$req->github_url;
      $project->user_id=Auth::user()->id;
      $project->save();
    return  redirect('/projects');
}


public function details($id)
{
   $project=Project::find($id);

   $feeds=FeedBack::where('project_id',$id)->get();
   
   return view('pages.details',['project'=>$project,'feeds'=>$feeds]);
}


}