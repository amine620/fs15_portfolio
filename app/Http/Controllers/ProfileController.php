<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showInfoInForm()
    {
        $profile=Profile::where('user_id',Auth::user()->id)->first();
        return view('backoffice.dash.ProfileForm',['profile'=>$profile]);
    }

    public function updateProfile(Request $request)
    {
       $profile=Profile::where('user_id',Auth::user()->id)->first();
       $profile->bio=$request->bio;
       $profile->phone=$request->phone;
       if($request->hasFile('avatar'))
       {
           $path=$request->avatar->store('profile');
       }
       
       $profile->image= isset($path) ? $path : $profile->image ;

    //    if(isset($path))
    //    {
    //        $profile->image=$path;
    //    }
    //    else{
    //        $profile->image=$profile->image;
    //    }

       $profile->update();
       return back();

    }
}
