<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Autentication routesYo
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', 'Blog\BlogController@index');

//Route::get('blog', 'PostsController@index');

Route::get('admin/posts', ['as' => 'admin.posts.index', 'uses' => 'PostsAdminController@index']);
Route::get('admin/posts/create', ['as' => 'admin.posts.create', 'uses' => 'PostsAdminController@create']);
Route::post('admin/posts/store', ['as' => 'admin.posts.store', 'uses' => 'PostsAdminController@store']);
Route::get('admin/posts/edit/{id}', ['as' => 'admin.posts.edit', 'uses' => 'PostsAdminController@edit']);
Route::put('admin/posts/update/{id}', ['as' => 'admin.posts.update', 'uses' => 'PostsAdminController@update']);
Route::get('admin/posts/destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostsAdminController@destroy']);