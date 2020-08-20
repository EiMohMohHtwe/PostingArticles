<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get("/register",'RegisterController@create');
Route::post("/register", 'RegisterController@store');

Route::get('/register/{user}/edit','RegisterController@edit')->name('register.edit');
Route::patch('/register/{user}','RegisterController@update')->name('register.update');

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/about',function(){
    return view('about',['articles'=>App\Article::take(3)->
    latest()->get()]);
});


Route::get("/profile",'RegisterController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', [
    'uses' => 'PostController@getDashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);

Route::post('/postCreatePost', [
    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create',
    'middleware' => 'auth'
]);

Route::get('/comment', [
    'uses' => 'CommentController@index',
    'as' => 'comment',
    'middleware' => 'auth'
]);

Route::get('posts/create', 'PostController@create')->name('posts.create');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');
Route::get('/editpost/{post}/edit','PostController@edit')->name('dashboard.edit');
Route::patch('/editpost/{post}','PostController@update')->name('dashboard.update');

Route::post('posts/{post}/comment', 'CommentController@store')->name('comments.store');

Route::get("/fileupload",'ResourceController@create');
Route::post("/fileupload",'ResourceController@store');
Route::get("/filelist",'ResourceController@index')->name('filelist.index');


