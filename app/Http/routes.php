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

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function () {return view('welcome');});
    
    Route::get('/home', 'HomeController@index');
    Route::get('/test', 'TestController@gettest');

    Route::get('/assets', 'AssetController@index');
    Route::get('/assets/create', 'AssetController@create');
    Route::post('/assets/store', 'AssetController@store');
    Route::get('/assets/{asset}', 'AssetController@show');
    Route::get('/assets/edit/{asset}', 'AssetController@edit');
    Route::patch('/assets/edit/{asset}', 'AssetController@update');
    Route::delete('/assets/{asset}', 'AssetController@destroy');
    Route::get('/assets/location/{asset}', 'AssetController@location');
    Route::patch('/assets/location/{asset}', 'AssetController@location_update');

    Route::get('/locations', 'LocationController@index');
    Route::get('/locations/create', 'LocationController@create');
    Route::post('/locations/store', 'LocationController@store');
    Route::get('/locations/{location}', 'LocationController@show');
    Route::get('/locations/edit/{location}', 'LocationController@edit');
    Route::patch('/locations/edit/{location}', 'LocationController@update');
    Route::delete('/locations/{location}', 'LocationController@destroy');

    Route::get('/contacts', 'ContactController@index');
    Route::get('/contacts/create', 'ContactController@create');
    Route::post('/contacts/store', 'ContactController@store');
    Route::get('/contacts/{contact}', 'ContactController@show');
    Route::get('/contacts/edit/{contact}', 'ContactController@edit');
    Route::patch('/contacts/edit/{contact}', 'ContactController@update');
    Route::delete('/contacts/{contact}', 'ContactController@destroy');

});
