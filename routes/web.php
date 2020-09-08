<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('logout', 'HomeController@logout')->name('logout');
Auth::routes();

// User Profile
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
    Route::get('{userId}', 'ProfileController@show')->name('profile.index');
    Route::post('{userId}/follow', 'ProfileController@followUser')->name('profile.follow');
    Route::post('{userId}/unfollow', 'ProfileController@unFollowUser')->name('profile.unfollow');
    Route::get('{userId}/followers', 'ProfileController@followers')->name('profile.followers');
    Route::get('{userId}/following', 'ProfileController@following')->name('profile.following');
    Route::get('user/{userId}/edit', 'ProfileController@edit')->name('profile.edit');
    Route::put('user/{userId}', 'ProfileController@update')->name('profile.update');
});

//Posts & Comments
Route::post('post', 'PostController@store')->name('post.store')->middleware('auth');
Route::post('comment', 'CommentController@store')->name('comment.store')->middleware('auth');
