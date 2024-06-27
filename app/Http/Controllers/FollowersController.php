<?php

namespace App\Http\Controllers;

use App\Models\Followers;
use Illuminate\Http\Request;

use Auth;

use DB;
use App\Models\User;
use Illuminate\Support\Str;



class FollowersController extends Controller
{
    // devuelve seguidores para web
    public function web_get_followers($nickname){
        $nickname= str_replace("@","",$nickname);

         $host= User::where('nickname','=',$nickname)->get();

        $host_id = $host[0]['id'];

        $user = Auth::user();
        $id = $user->id;
        if($host_id!=$user->id){
             $id=$host_id;
        }
        $followings = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL FROM users AS t1 INNER JOIN followers AS t2 ON t1.id==t2.user_id WHERE t2.follower_id=".$id." ORDER BY t1.name ASC");
        $followers = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL FROM users AS t1 INNER JOIN followers AS t2 ON t1.id==t2.follower_id WHERE t2.user_id=".$id." ORDER BY t1.name ASC");
        $followto = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL FROM users AS t1 WHERE t1.id NOT IN (SELECT t2.follower_id FROM followers AS t2 WHERE t2.user_id=".$id.") AND t1.id !=".$id." ORDER BY t1.name ASC");
        $followers_id='';
        foreach($followers as $node ){
            $followers_id .=$node->USER_ID.",";

        }
        $followers_id = Str::substr($followers_id, 0, strlen($followers_id)-1);
       // dd($followers_id);
        $posts = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, 	t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL, 	t2.id AS USER_POST_ID,t2.post AS USER_POST_BODY,	t2.created_at AS USER_POST_TS FROM 	posts AS t2	INNER JOIN users AS t1 ON t1.id = t2.user_id WHERE t2.user_id IN(".$followers_id.") ORDER BY	t1.id DESC;");
//dd($posts);
        return view('followers',['followers'=>$followers,'posts'=>$posts,'followings'=>$followings,'followto'=>$followto]);
    }
     // devuelve seguidores para api
     public function web_get_followings($nickname){
        $nickname= str_replace("@","",$nickname);
        // dd($nickname);
         $host= User::where('nickname','=',$nickname)->get();
         //dd($host);
         $host_id = $host[0]['id'];

         $user = Auth::user();
         $id = $user->id;
         if($host_id!=$user->id){
             $id=$host_id;
         }

        $followings = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL FROM users AS t1 INNER JOIN followers AS t2 ON t1.id==t2.user_id WHERE t2.follower_id=".$id." ORDER BY t1.name ASC");
        $followers = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL FROM users AS t1 INNER JOIN followers AS t2 ON t1.id==t2.follower_id WHERE t2.user_id=".$id." ORDER BY t1.name ASC");
        $followto = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL FROM users AS t1 WHERE t1.id NOT IN (SELECT t2.follower_id FROM followers AS t2 WHERE t2.user_id=".$id.") AND t1.id !=".$id." ORDER BY t1.name ASC");
        $followers_id='';
        foreach($followings as $node ){
            $followers_id .=$node->USER_ID.",";

        }
        $followers_id = Str::substr($followers_id, 0, strlen($followers_id)-1);
       // dd($followers_id);
        $posts = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, 	t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL, 	t2.id AS USER_POST_ID,t2.post AS USER_POST_BODY,	t2.created_at AS USER_POST_TS FROM 	posts AS t2	INNER JOIN users AS t1 ON t1.id = t2.user_id WHERE t2.user_id IN(".$followers_id.") ORDER BY	t1.id DESC;");
//dd($posts);
        return view('followers',['followers'=>$followers,'posts'=>$posts,'followings'=>$followings,'followto'=>$followto]);
        dd($followings);
    }

    //ajax para seguir
    public function ajax_action_start_follow(Request $req){
        $follow_id = Auth::user()->id;
        $data = $req->all();

        $user_id =  $data['user_id'];
        $follow = new Followers();
        $follow->user_id=$user_id;
        $follow->follower_id=$follow_id;
        $follow->save();
        $followto= User::where('id','=',$user_id)->get()->toArray();

        return 'Siguiendo a @'.$followto[0]['nickname'];


    }
//ajax para dejar de seguir
    public function ajax_action_stop_follow(Request $req){
        $follow_id = Auth::user()->id;
        $data = $req->all();
        $user_id =  $data['user_id'];

        $followto= User::where('id','=',$user_id)->get()->toArray();
        $follow =  Followers::find($user_id);

        $follow->delete();
        return 'dejaste de seguir a @'.$followto[0]['nickname'];

    }

}
