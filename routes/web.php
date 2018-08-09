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
    Route::get('/home', function () {
        return view('home');
    })->name('main');

    Route::get('/', [
        'uses' => 'AuthController@getSignInPage',
        'as' => 'signin',
        'middleware' => 'guest'
    ]);

    Route::get('/users', [
        'uses' => 'AppController@getUsersPage',
        'as' => 'users',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
    Route::get('/rules', [
        'uses' => 'AppController@getUsersRules',
        'as' => 'rules',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
    Route::get('/signup', [
        'uses' => 'AuthController@getSignUpPage',
        'as' => 'signup',
        'middleware' => 'roles',
        'roles' => ['Admin']
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
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
    Route::post('/admin/assign-roles', [
        'uses' => 'AppController@postAdminAssignRoles',
        'as' => 'admin.assign',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
});