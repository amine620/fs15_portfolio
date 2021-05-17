<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedBackController extends Controller
{
    public function store(Request $req)
    {
        $feed=New FeedBack();
        $feed->content=$req->content;
        $feed->project_id=$req->project_id;
        $feed->user_id=Auth::user()->id;
        $feed->save();
        return back();
    }


 
}
