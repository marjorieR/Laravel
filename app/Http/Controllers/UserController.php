<?php

namespace App\Http\Controllers;


/**
 * Class ActorsController
 * @package App\Http\Controllers
 */
class UserController extends Controller{


    public function getIndex(){
        return view('User/index');
    }

    public function getCreate(){
        return view('User/create');
    }

    public function getRead(){
        return view('User/read');
    }

    public function getUpdate(){
        return view('User/update');
    }




    public function search($zipcode=69002,$ville="lyon",$actif=1){
        return view('/User/search',['zipcode'=>$zipcode,'ville'=>$ville,'actif'=>$actif]);
    }
}