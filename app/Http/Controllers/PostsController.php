<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Auth;
use DB;
class PostsController extends Controller
{
    //devuel todos los post
    public function web_post_all(){
        $user = Auth::user();
        $id = $user->id;
        $posts = Posts::All()->orderBy('id','DESC')->get()->toArray();
        dd();
        return view('posts',['posts'=>$posts]);

    }
}
