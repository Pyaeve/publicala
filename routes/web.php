<?php

use Illuminate\Support\Facades\Route;
App::setLocale('es');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return  redirect(route('home'));
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//rutas para seguidores
Route::get('/ajax/follow', [App\Http\Controllers\FollowersController::class, 'ajax_action_start_follow'])->name('frontend.ajax.follow.start');
Route::get('/ajax/unfollow', [App\Http\Controllers\FollowersController::class, 'ajax_action_stop_follow'])->name('frontend.ajax.follow.stop');
Route::get('/@{nickname}/', [App\Http\Controllers\HomeController::class, 'web_user_profile'])->name('frontend.user.profile');
Route::get('/@{nickname}/followers', [App\Http\Controllers\FollowersController::class, 'web_get_followers'])->name('frontend.followers.host');
Route::get('/@{nickname}/followings', [App\Http\Controllers\FollowersController::class, 'web_get_followings'])->name('frontend.followings.host');
