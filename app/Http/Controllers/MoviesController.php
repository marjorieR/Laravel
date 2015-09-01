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
    public function read($id){
        return view('Movies/read',['id'=>$id]);

    }

    /**
     *  page Update
     */
    public function update($id){
        return view('Movies/update',['id'=>$id]);

    }

    /**
     *  page Delete
     */
    public function delete($id){
        return redirect('/movies/index',['id'=>$id]); //redirection vers l'index

    }

    public function search($languages= "fr",$visible = 1,$duree = 2){
        return view('/Movies/search',['languages'=>$languages,'visible'=>$visible,'duree'=>$duree]);
    }
}