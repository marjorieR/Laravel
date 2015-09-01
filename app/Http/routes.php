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

Route::get('/index/{ville?}', ['uses' => 'ActorsController@index', 'as' => 'actors.index']);

/** creation d'un actors */
Route::get('/create', ['uses' => 'ActorsController@create', 'as' => 'actors.create']);

/** lit un seul actors */

Route::get('/read/{id}', ['uses' => 'ActorsController@read'])

    -> where ('id','[0-9]+');

/** modifie un seul acteurs */

Route::get('/update/{id}', ['uses' => 'ActorsController@update'])

    -> where ('id','[0-9]+');



/** supprime un seul acteurs */

Route::get('/delete/{id}', ['uses' => 'ActorsController@delete'])

    -> where ('id','[0-9]+');
});



/** pages CRUD Directors */


Route::group(['prefix'=>'directors'], function(){

Route::get('/index/{ville?}', ['uses' => 'DirectorsController@index', 'as' => 'directors.index']);



Route::get('/create', ['uses' => 'DirectorsController@create']);

Route::get('/read/{id}', ['uses' => 'DirectorsController@read'])
    -> where ('id','[0-9]+');

Route::get('/update/{id}', ['uses' => 'DirectorsController@update'])
    -> where ('id','[0-9]+');

Route::get('/delete/{id}', ['uses' => 'DirectorsController@delete'])
    -> where ('id','[0-9]+');
});


/** pages CRUD Movies */
Route::group(['prefix'=>'movies'], function(){

    Route::get('/index', ['uses' => 'MoviesController@index']);
    Route::get('/create', ['uses' => 'MoviesController@create']);

    Route::get('/read/{id}', ['uses' => 'MoviesController@read'])
        -> where ('id','[0-9]+');

    Route::get('/update/{id}', ['uses' => 'MoviesController@update'])
        -> where ('id','[0-9]+');

    Route::get('/delete/{id}', ['uses' => 'MoviesController@delete'])
        -> where ('id','[0-9]+');


    Route::get('/search/{languages?}-{visible?}-{duree?}', [ 'uses' => 'MoviesController@search'])
        -> where ('languages','fr|es|en')
        -> where ('visible','0|1')
        -> where ('duree','[0-9]{1,2}');

});


route::controller('user','UserController');

Route::get('/user/search/{zipcode?}-{ville?}-{actif?}', [ 'uses' => 'UserController@search'])
    -> where ('zipcode','[0-9]{5}')
    -> where ('ville','[a-zA-Z-]+')
    -> where ('actif','0|1');




route::controller('cinemas','CinemasController');
route::controller('categories','CategoriesController');




























