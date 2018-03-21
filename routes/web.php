<?php

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
    return view('login_register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('send', 'MailController@send');
Route::get('/verifyEmail', 'Auth\RegisterController@verifyEmail')->name('verifyEmail');
Route::get('verify/{token}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
Route::get('/follow/{friend_id}', 'FollowUnfollow@followFriend');
Route::get('/unfollow/{friend_id}', 'FollowUnfollow@unfollowFriend');
