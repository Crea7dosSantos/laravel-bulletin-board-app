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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match('get', '/', 'PostsController@index')->name('top');
Route::match('get', 'posts/create', 'PostsController@create')->name('create');
Route::match('post', 'posts/create', 'PostsController@store')->name('store');
Route::match('get', 'posts/{id}', 'PostsController@show')->name('show');
Route::match('post', 'posts/{id}', 'CommentsController@store')->name('comments');
Route::match('get', 'posts/delete/{id}', 'PostsController@destroy')->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
