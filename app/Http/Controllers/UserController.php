<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function index(){
    return view('editprofile');
  }
  public function updateProfile(Request $request){

  

    $user=User::findOrFail(Auth::user()->id);
    $user->update([
       'name'=>$request->name,
       'userType'=>$request->userType,
    ]);
    $user->profile2()->updateOrCreate(
        [
            'user_id'=>$user->id,
        ],
        [
            'image'=>$request->image,
            'city'=>$request->city,
            'practicalAchievement'=>$request->practicalAchievement,
            'Phone'=>$request->Phone,
            'Facebook'=>$request->Facebook,
            'LinkedIn'=>$request->LinkedIn,
            'Github'=>$request->Github,
            'BiographicalInfo'=>$request->BiographicalInfo,
        ]
    );
    return redirect('/profileqw');
  }
  
}
