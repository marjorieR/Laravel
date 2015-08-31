<?php

namespace App\Http\Controllers;


/**
 * Class DirectorsController
 * @package App\Http\Controllers
 */




class DirectorsController extends Controller{




    public function index(){
        return view('Directors/index');

    }


    /**
     *  page create
     */
    public function create(){
        return view('Directors/create');

    }

    /**
     *  page read
     */
    public function read($firstname,$lastname){
        return view('directors/read',['firstname'=>$firstname],['lastname'=>$lastname]);

    }

    /**
     *  page Update
     */
    public function update(){
        return view('Directors/update');

    }

    /**
     *  page Delete
     */
    public function delete(){
        return redirect('/directors/index'); //redirection vers l'index

    }


}