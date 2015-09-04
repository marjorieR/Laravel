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


/** *****************************************************************************************************************/
/** ******************************************  pages CRUD ACTORS ***************************************************/
/** *****************************************************************************************************************/



Route::group(['prefix'=>'actors'], function(){


/** liste les acteurs*/

Route::get('/index/{ville?}', ['uses' => 'ActorsController@index', 'as' => 'actors.index']);

/** creation d'un actors */
Route::get('/create', ['uses' => 'ActorsController@create', 'as' => 'actors.create']);

/** lit un seul actors */

Route::get('/read/{id}', ['uses' => 'ActorsController@read', 'as' => 'actors.read'])

    -> where ('id','[0-9]+');

/** modifie un seul acteurs */

Route::get('/update/{id}', ['uses' => 'ActorsController@update'])

    -> where ('id','[0-9]+');



/** supprime un seul acteurs */

Route::get('/delete/{id}', ['uses' => 'ActorsController@delete', 'as' => 'actors.delete'])

    -> where ('id','[0-9]+');
});





/** *****************************************************************************************************************/
/** ******************************************  pages CRUD Directors ************************************************/
/** *****************************************************************************************************************/



Route::group(['prefix'=>'directors'], function(){

Route::get('/index/{ville?}', ['uses' => 'DirectorsController@index', 'as' => 'directors.index']);

Route::get('/create', ['uses' => 'DirectorsController@create', 'as' => 'directors.create']);

Route::get('/read/{id}', ['uses' => 'DirectorsController@read', 'as' => 'directors.read'])
    -> where ('id','[0-9]+');

Route::get('/update/{id}', ['uses' => 'DirectorsController@update'])
    -> where ('id','[0-9]+');

Route::get('/delete/{id}', ['uses' => 'DirectorsController@delete', 'as' => 'directors.delete'])
    -> where ('id','[0-9]+');
});




/** *****************************************************************************************************************/
/** ******************************************  pages CRUD MOVIES ***************************************************/
/** *****************************************************************************************************************/



Route::group(['prefix'=>'movies'], function(){

    Route::get('/index/{bo?}/{visibilite?}/{distributeur?}', ['uses' => 'MoviesController@index', 'as' => 'movies.index']);


    Route::get('/create', ['uses' => 'MoviesController@create', 'as' => 'movies.create']);


    Route::get('/read/{id}', ['uses' => 'MoviesController@read', 'as' => 'movies.read'])
        -> where ('id','[0-9]+');


    Route::get('/update/{id}', ['uses' => 'MoviesController@update'])
        -> where ('id','[0-9]+');


    Route::get('/delete/{id}', ['uses' => 'MoviesController@delete', 'as' => 'movies.delete'])
        -> where ('id','[0-9]+');


    Route::get('/activation/{id}', ['uses' => 'MoviesController@activation', 'as' => 'movies.activation'])
        -> where( 'id','[0-9]+');


    Route::get('/cover/{id}' ,['uses' => 'MoviesController@cover', 'as' => 'movies.cover'])
        -> where( 'id','[0-9]+');



    Route::get('/search/{languages?}-{visible?}-{duree?}', [ 'uses' => 'MoviesController@search'])
        -> where ('languages','fr|es|en')
        -> where ('visible','0|1')
        -> where ('duree','[0-9]{1,2}');



});

/** *****************************************************************************************************************/
/** ******************************************  pages CRUD USERS ****************************************************/
/** *****************************************************************************************************************/



Route::group(['prefix'=>'users'], function() {

    Route::get('/index', ['uses' => 'UsersController@index', 'as' => 'users.index']);

    Route::get('/create', ['uses' => 'UsersController@create', 'as' => 'users.create']);

    Route::get('/read/{id}', ['uses' => 'UsersController@read', 'as' => 'users.read'])
        ->where('id', '[0-9]+');

    Route::get('/update/{id}', ['uses' => 'UsersController@update'])
        ->where('id', '[0-9]+');

    Route::get('/delete/{id}', ['uses' => 'UsersController@delete', 'as' => 'users.delete'])
        ->where('id', '[0-9]+');

    Route::get('/enabled/{id}' ,['uses' => 'UsersController@enabled', 'as' => 'users.enabled'])
        -> where( 'id','[0-9]+');


    Route::get('/user/search/{zipcode?}-{ville?}-{actif?}', ['uses' => 'UserController@search'])
        ->where('zipcode', '[0-9]{5}')
        ->where('ville', '[a-zA-Z-]+')
        ->where('actif', '0|1');






});


Route::get('/search' ,['uses' => 'PagesController@search', 'as' => 'pages.search']);








route::controller('cinemas','CinemasController');
route::controller('categories','CategoriesController');




























