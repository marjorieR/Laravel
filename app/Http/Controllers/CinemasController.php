<?php

namespace App\Http\Controllers;


/**
 * Class ActorsController
 * @package App\Http\Controllers
 */
class CinemasController extends Controller{


    public function getIndex(){
        return view('Cinemas/index');
    }

    public function getCreate(){
        return view('Cinemas/create');
    }

    public function getRead(){
        return view('Cinemas/read');
    }

    public function getUpdate(){
        return view('Cinemas/update');
    }





}