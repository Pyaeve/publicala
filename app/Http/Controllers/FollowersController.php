<?php

namespace App\Http\Controllers;

use App\Models\Followers;
use Illuminate\Http\Request;
//agregamos referencias a Auth
use Auth;



class FollowersController extends Controller
{
    // devuelve seguidores para web
    public function web_get_followers(){
        $user = Auth::user()->id;
        $followers = Followers::where("user_id", $user)->get();
        dd($followers);
    }
     // devuelve seguidores para api
     public function api_get_followers(){
        $user = Auth::user()->id;
        $followers = Followers::where("user_id", $user)->get();
        dd($followers);
    }
    // devuelve a quien se sigue
    public function web_get_followings(){

    }
}
