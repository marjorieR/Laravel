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
    public function read($id){
        return view('Directors/read',['id'=>$id]);

    }

    /**
     *  page Update
     */
    public function update($id){
        return view('Directors/update',['id'=>$id]);

    }

    /**
     *  page Delete
     */
    public function delete($id){
        return redirect('/directors/index',['id'=>$id]);//redirection vers l'index

    }


}