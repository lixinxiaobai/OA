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

// User routes
Route::group(['middleware' => 'auth'], function () {
    // 主页
    Route::get('/', 'HomeController@index');
//    Route::get('login/{provider}', 'Auth\AuthController@redirectToProvider');
//    Route::get('login/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
});

Route::post('/authenticate','LoginController@authenticate');
Route::get('/verify','LoginController@verify');

Route::auth();

/**
 * Route::group(['middleware' => 'web'], function () {
// Home page for the website.
Route::get('/', 'PublicController@home');
Route::get('/register/{role?}', 'Auth\AuthController@showRegistrationForm');
Route::auth();
Route::get('login/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('/home', 'UserController@home');
Route::get(trans_setlocale().'/admin', 'AdminController@home');
Route::get(trans_setlocale().'admin/profile', 'AdminController@profile');
Route::get(trans_setlocale().'admin/lock', 'AdminController@lock');
Route::get(trans_setlocale().'admin/masters', 'AdminController@masters');
Route::get(trans_setlocale().'admin/reports', 'AdminController@reports');
});
Route::get('/test', function () {
return  \Menu::menu('admin', 'menu.admin');
});
 */
