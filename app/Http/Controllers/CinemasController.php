<?php

namespace App\Http\Controllers;


/**
 * Class ActorsController
 * @package App\Http\Controllers
 */
class CinemasController extends Controller{


    public function index(){
        return view('Cinemas/index');
    }

    public function create(){
        return view('Cinemas/create');
    }

    public function read(){
        return view('Cinemas/read');
    }

    public function update(){


        return view('Cinemas/update');
    }





}