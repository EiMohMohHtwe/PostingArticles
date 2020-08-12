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

//Route::get("/dashboard",'RegisterController@create');

//Route::post('/createpost','PostController@postCreatePost');

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
