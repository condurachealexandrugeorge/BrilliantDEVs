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
Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('home');
    })->name('main');

    Route::get('/admin', [
        'uses' => 'AppController@getAdminPage',
        'as' => 'author',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
    Route::get('/manager', [
        'uses' => 'AppController@getManagerPage',
        'as' => 'manager',
        'middleware' => 'roles',
        'roles' => ['Admin', 'Manager']
    ]);
    Route::get('/developer', [
        'uses' => 'AppController@getDeveloperPage',
        'as' => 'developer',
        'middleware' => 'roles',
        'roles' => ['Admin', 'Manager','Developer']
    ]);
    Route::get('/client', [
        'uses' => 'AppController@getClientPage',
        'as' => 'client',
        'middleware' => 'roles',
        'roles' => ['Admin', 'Manager','Developer','Client']
    ]);
    Route::get('/signup', [
        'uses' => 'AuthController@getSignUpPage',
        'as' => 'signup',
        'middleware' => 'guest'
    ]);
    Route::get('/signin', [
        'uses' => 'AuthController@getSignInPage',
        'as' => 'signin',
        'middleware' => 'guest'
    ]);
    Route::get('/logout', [
        'uses' => 'AuthController@getLogout',
        'as' => 'logout',
        'middleware' => 'roles',
        'roles' => ['Admin', 'Manager','Developer','Client']
    ]);
    Route::post('/signin', [
        'uses' => 'AuthController@postSignIn',
        'as' => 'signin',
        'middleware' => 'guest'
    ]);
    Route::post('/signup', [
        'uses' => 'AuthController@postSignUp',
        'as' => 'signup',
        'middleware' => 'guest',
    ]);
    Route::post('/admin/assign-roles', [
        'uses' => 'AppController@postAdminAssignRoles',
        'as' => 'admin.assign',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
});