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

/**
 * pages Welcomme
 */

Route::get('/', function () {
    return view('Pages/welcome');
});


/**
 * pages de contact
 */
Route::get('/contact', ['uses' => 'PagesController@contact']);



/**
 * pages mention legales
 */
Route::get('/mention', ['uses' => 'PagesController@mention']);



/**
 * pages faq
 */
Route::get('/faq', ['uses' => 'PagesController@faq']);



/** pages CRUD Actors */


Route::group(['prefix'=>'actors'], function(){


/** liste les acteurs*/

Route::get('/index', ['uses' => 'ActorsController@index']);

/** creation d'un actors */
Route::get('/create', ['uses' => 'ActorsController@create']);

/** lit un seul actors */

Route::get('/read/{firstname}/{lastname}', ['uses' => 'ActorsController@read']);

/** modifie un seul acteurs */

Route::get('/update/{id}', ['uses' => 'ActorsController@update']);

/** supprime un seul acteurs */

Route::get('/delete/{id}', ['uses' => 'ActorsController@delete']);

});



/** pages CRUD Directors */


Route::group(['prefix'=>'directors'], function(){

Route::get('/index', ['uses' => 'DirectorsController@index']);
Route::get('/create', ['uses' => 'DirectorsController@create']);
Route::get('/read/{firstname}/{lastname}', ['uses' => 'DirectorsController@read']);
Route::get('/update/{id}', ['uses' => 'DirectorsController@update']);
Route::get('/delete/{id}', ['uses' => 'DirectorsController@delete']);
});


/** pages CRUD Movies */
Route::group(['prefix'=>'movies'], function(){

Route::get('/index', ['uses' => 'MoviesController@index']);
Route::get('/create', ['uses' => 'MoviesController@create']);
Route::get('/read/{id}', ['uses' => 'MoviesController@read']);
Route::get('/update/{id}', ['uses' => 'MoviesController@update']);
Route::get('/delete/{id}', ['uses' => 'MoviesController@delete']);
});