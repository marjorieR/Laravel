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

Route::group(['prefix'=> 'pages'], function() {

    Route::get('/index', ['uses' => 'PagesController@index']);

    Route::get('/advenced', ['uses' =>'PagesController@advenced','as'=>'pages.advenced']);

    Route::get('/pro', ['uses' =>'PagesController@pro','as'=>'pages.pro']);

    Route::post('/create-task', ['uses' => 'PagesController@tasks', 'as' => 'pages.createtask']);

    Route::get('/deletetasks/{id}', ['uses' => 'PagesController@deletetasks', 'as' => 'pages.deletetasks']);

    Route::get('/ajaxchat', ['uses' => 'PagesController@createmessage', 'as' => 'pages.ajaxchat']);







//    Route::get('/pro', ['uses' =>'PagesController@pro','as'=>'pages.pro']);


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


/**
 *
 * Route implicites vers mes controleurs préconcue
 * car les controleurs uses des traits
 * avec la fonctionalité authentifications de faites( login, logout,
 */



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password'=> 'Auth\PasswordController'
]);




Route::group(['prefix'=> 'admin',
    'middleware'=> 'auth'],function(){




    Route::post('/messages-create',['as'=>'messages.create','uses'=>'PagesController@createmessage']);

    Route::controller('api','ApiController');





        Route::get('/',['as' =>'home','uses' => 'PagesController@index']);

        Route::get('/account',['as' =>'account','uses' => 'Auth\AuthController@account']);



















/** *****************************************************************************************************************/
/** ******************************************  pages CRUD ACTORS ***************************************************/
/** *****************************************************************************************************************/



Route::group(['prefix'=>'actors'], function(){


/** liste les acteurs*/

Route::get('/index/{ville?}', ['uses' => 'ActorsController@index', 'as' => 'actors.index']);

/** creation d'un actors */
Route::get('/create', ['uses' => 'ActorsController@create', 'as' => 'actors.create']);


/** Reception des donnée du formulaire */
Route::post('/post', ['uses' => 'ActorsController@store', 'as' => 'actors.post']);



/** lit un seul actors */

Route::get('/read/{id}', ['uses' => 'ActorsController@read', 'as' => 'actors.read'])

    -> where ('id','[0-9]+');

/** modifie un seul acteurs */

Route::get('/update/{id}', ['uses' => 'ActorsController@update'])

    -> where ('id','[0-9]+');



/** supprime un seul acteurs */

Route::get('/delete/{id}', ['uses' => 'ActorsController@delete', 'as' => 'actors.delete'])

    -> where ('id','[0-9]+');

Route::post('/handle-likes', ['uses' => 'ActorsController@likes', 'as' => 'actors.likes']);

Route::post('/handle-dislikes', ['uses' => 'ActorsController@dislikes', 'as' => 'actors.dislikes']);

});





/** *****************************************************************************************************************/
/** ******************************************  pages CRUD Directors ************************************************/
/** *****************************************************************************************************************/



Route::group(['prefix'=>'directors'], function(){

Route::get('/index/{ville?}', ['uses' => 'DirectorsController@index', 'as' => 'directors.index']);



Route::get('/create', ['uses' => 'DirectorsController@create', 'as' => 'directors.create']);

Route::post('/post', ['uses' => 'DirectorsController@store', 'as' => 'directors.post']);


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

    Route::get('/trash', ['uses' => 'MoviesController@trash', 'as' => 'movies.trash']);

    Route::get('/restore/{id}', ['uses' => 'MoviesController@restore', 'as' => 'movies.restore'])
    -> where ('id','[0-9]+');



    Route::post('/post', ['uses' => 'MoviesController@store', 'as' => 'movies.post']);


    Route::get('/read/{id}', ['uses' => 'MoviesController@read', 'as' => 'movies.read'])
        -> where ('id','[0-9]+');

    Route::post('/comment/{id}', ['uses' => 'MoviesController@comment', 'as' => 'movies.comment'])
        -> where ('id','[0-9]+');



    Route::post('/flymovie', ['uses' => 'MoviesController@flymovie', 'as' => 'movies.flymovie']);


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

    Route::get('/actions', ['uses' => 'MoviesController@actions' , 'as'=>'.actions']);


    Route::post('/handle-favoris', ['uses' => 'MoviesController@favoris', 'as' => 'movies.favoris']);
});

/** *****************************************************************************************************************/
/** ******************************************  pages CRUD USERS ****************************************************/
/** *****************************************************************************************************************/



Route::group(['prefix'=>'users'], function() {

    Route::get('/index', ['uses' => 'UsersController@index', 'as' => 'users.index']);

    Route::get('/create', ['uses' => 'UsersController@create', 'as' => 'users.create']);

    Route::post('/post',['uses' => 'UsersController@store','as'=> 'users.post']);


    Route::get('/read/{id}', ['uses' => 'UsersController@read', 'as' => 'users.read'])
        ->where('id', '[0-9]+');

    Route::get('/update/{id}', ['uses' => 'UsersController@update'])
        ->where('id', '[0-9]+');

    Route::get('/delete/{id}', ['uses' => 'UsersController@delete', 'as' => 'users.delete'])
        ->where('id', '[0-9]+');

    Route::get('/enabled/{id}' ,['uses' => 'UsersController@enabled', 'as' => 'users.enabled'])
        -> where( 'id','[0-9]+');


    Route::get('/user/search/{zipcode?}-{ville?}-{actif?}', ['uses' => 'UsersController@search'])
        ->where('zipcode', '[0-9]{5}')
        ->where('ville', '[a-zA-Z-]+')
        ->where('actif', '0|1');

    Route::post('/handle-banni', ['uses' => 'UsersController@banni', 'as' => 'users.banni']);




});




/** *******************************************************************************************************************/
/** ******************************************  pages CRUD CATEGORIES *************************************************/
/** *******************************************************************************************************************/


Route::group(['prefix'=> 'categories'], function() {

    Route::get('/index', ['uses' => 'CategoriesController@index', 'as' => 'categories.index']);

    Route::get('/create', ['uses' => 'CategoriesController@create', 'as' => 'categories.create']);

    Route::post('/post',['uses' => 'CategoriesController@store','as'=> 'categories.post']);

    Route::get('/read', ['uses' => 'CategoriesController@create', 'as' => 'categories.read']);

    Route::get('/update', ['uses' => 'CategoriesController@update']);

    Route::get('/delete', ['uses' => 'CategoriesController@update']);



});


    Route::group(['prefix' => 'comments'], function () {

        Route::get('/index', ['uses' => 'CommentsController@index', 'as' => 'pages.index']);

        Route::get('/ajaxcomments', ['uses' => 'CommentsController@ajaxcomments', 'as' => 'comments.ajaxcomments']);


    });

    Route::group(['prefix' => 'sessions'], function () {

        Route::get('/index', ['uses' => 'SessionsController@index', 'as' => 'pages.index']);
        Route::get('/ajaxsessions', ['uses' => 'SessionsController@ajaxsessions', 'as' => 'sessions.ajaxsessions']);




    });

    Route::group(['prefix' => 'tasks'], function () {

    Route::get('/ajaxtasks', ['uses' => 'TasksController@ajaxtasks', 'as' => 'tasks.ajaxtasks']);


    });




});



Route::get('/search' ,['uses' => 'PagesController@search', 'as' => 'pages.search']);








route::controller('cinemas','CinemasController');




























