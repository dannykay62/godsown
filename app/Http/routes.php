<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
//Pages
Route::get('judges', 'JudgesController@judges');

/**
 * Blog routes
 */
Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');
//Blog Admin area route
Route::get('admin', function() {
   return redirect('/admin/post');
});
$router->group([
   'namespace' => 'Admin',
    'middleware' => ['web','auth'],
    ], function () {
        Route::resource('admin/post', 'PostController');
        Route::resource('admin/tag', 'TagController');
        Route::get('admin/upload', 'UploadController@index');
    }
);
// Loggin in and out



/**
 * Auth routes
 */
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
});


//Route::get('/home', 'HomeController@index');
//Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
//Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');