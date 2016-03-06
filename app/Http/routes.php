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

/*Route::get('/auth', function(){

    if(Auth::attempt(['email'=>'elvis@email.ccom', 'password'=>123456])){
        return 'oi';
    } else {
        return 'falhou';
    }

//    if(Auth::check()){
//        return 'true';
//    }
});

Route::get('/auth/logout', function(){
    Auth::logout();
});*/

// Autentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', 'Blog\BlogController@index');

Route::get('blog', 'PostsController@index');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

    Route::get('', ['as' => 'admin', function(){
        return "dashboard";
    }]);

    Route::group(['prefix'=>'posts'], function(){

        Route::get('', ['as' => 'admin.posts.index', 'uses' => 'PostsAdminController@index']);
        Route::get('create', ['as' => 'admin.posts.create', 'uses' => 'PostsAdminController@create']);
        Route::post('store', ['as' => 'admin.posts.store', 'uses' => 'PostsAdminController@store']);
        Route::get('edit/{id}', ['as' => 'admin.posts.edit', 'uses' => 'PostsAdminController@edit']);
        Route::put('update/{id}', ['as' => 'admin.posts.update', 'uses' => 'PostsAdminController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostsAdminController@destroy']);

    });

});
