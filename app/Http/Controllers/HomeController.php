<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Posts;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user()->id;
        $followers = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL FROM users AS t1 INNER JOIN followers AS t2 ON t1.id==t2.follower_id WHERE t2.user_id=".$user." ORDER BY t1.name ASC");
        $followings = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL FROM users AS t1 INNER JOIN followers AS t2 ON t1.id==t2.user_id WHERE t2.follower_id=".$user." ORDER BY t1.name ASC");
        $followto = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL FROM users AS t1 WHERE t1.id NOT IN (SELECT t2.follower_id FROM followers AS t2 WHERE t2.user_id=".$user.") AND t2.follower_id!=".$user." ORDER BY t1.name ASC");
       //dd($followto);
        $total_followers = count($followers);
        $total_followings = count($followings);
       // dd($total_followers);
       $posts = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, 	t1.sername AS USER_SERNAME, 	t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL, 	t2.id AS USER_POST_ID,t2.post AS USER_POST_BODY,	t2.created_at AS USER_POST_TS FROM 	posts AS t2	INNER JOIN users AS t1 ON t1.id = t2.user_id ORDER BY	t1.id DESC;");

        
        return view('home', ['followers'=>$followers,'followings'=>$followings,'followto'=>$followto,'posts'=>$posts ]);
    }

        //creamos el profile
    public function web_user_profile($nickname){

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

        $followers = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL FROM users AS t1 INNER JOIN followers AS t2 ON t1.id==t2.follower_id WHERE t2.user_id=".$id." ORDER BY t1.name ASC");
        $followings = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL FROM users AS t1 INNER JOIN followers AS t2 ON t1.id==t2.user_id WHERE t2.follower_id=".$id." ORDER BY t1.name ASC");
        $followto = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, t1.sername AS USER_SERNAME, t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL FROM users AS t1 WHERE t1.id NOT IN (SELECT t2.follower_id FROM followers AS t2 WHERE t2.user_id=".$id.") AND t1.id !=".$id." ORDER BY t1.name ASC");
       //dd($followto);
        $total_followers = count($followers);
        $total_followings = count($followings);
        $posts = DB::select("SELECT t1.id AS USER_ID, t1.name AS USER_NAME, 	t1.sername AS USER_SERNAME, 	t1.nickname AS USER_NICKNAME, t1.email AS USER_EMAIL, 	t2.id AS USER_POST_ID,t2.post AS USER_POST_BODY,	t2.created_at AS USER_POST_TS FROM 	posts AS t2	INNER JOIN users AS t1 ON t1.id = t2.user_id WHERE t2.user_id=".$id. " ORDER BY	t1.id DESC;");

       // dd($total_followers);
        return view('profiles', ['followers'=>$followers,'followings'=>$followings,'followto'=>$followto , 'posts'=>$posts,'host'=>$host]);

    }
}
