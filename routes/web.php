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

Route::get('/', 'PagesController@index');

Route::resource('users', 'UsersController');
//Route::post('users', 'UsersController@store');


Route::resource('files', 'FilesController');
Route::post('files', 'FilesController@create');
Route::post('files', 'FilesController@store')->name('storeFile');


Route::resource('posts', 'PostsController');
Route::post('posts', 'PostsController@store')->name('storePost');
Route::get('/posts/{id}/edit', 'PostsController@edit');
Route::post('/posts/{id}/update', 'PostsController@update');
Route::get('/postsDelete/{id}', 'PostsController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
