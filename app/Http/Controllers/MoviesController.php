<?php

namespace App\Http\Controllers;


/**
 * Class ActorsController
 * @package App\Http\Controllers
 */
class MoviesController extends Controller{


    /**
     *  page create
     */


    public function index(){
        return view('Movies/index');

    }
    public function create(){
        return view('Movies/create');

    }

    /**
     *  page read
     */
    public function read(){
        return view('Movies/read');

    }

    /**
     *  page Update
     */
    public function update(){
        return view('Movies/update');

    }

    /**
     *  page Delete
     */
    public function delete(){
        return redirect('/movies/index'); //redirection vers l'index

    }


}