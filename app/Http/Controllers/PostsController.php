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
        $posts = Posts::all();

        return view('posts',['posts'=>$posts]);

    }

    public function web_post_save(Request $req){
        $user = Auth::user();
        $id = $user->id;
        $data = $req->all();
        $posts = new Posts();
        $posts->user_id=$id;
        $posts->post=$data['post'];
        $posts->save();

        return  redirect(route('home'));

    }

}
