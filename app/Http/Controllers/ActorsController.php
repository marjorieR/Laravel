<?php

namespace App\Http\Controllers;
use App\Model\Actors;


/**
 * Class ActorsController
 * @package App\Http\Controllers
 */
class ActorsController extends Controller{


    /**
     *  page create
     */


    public function index(){



        $datas =[

            "actors" => Actors::all()
        ];

        return view('Actors/index',$datas);

    }


    public function create(){
        return view('Actors/create');

    }

    /**
     *  page read
     */
    public function read($id){

        return view('Actors/read',['id'=>$id]);

    }

    /**
     *  page Update
     */
    public function update($id){

        return view('Actors/update',['id'=>$id]);

    }

    /**
     *  page Delete
     */
    public function delete($id){
        return redirect('/actors/index',['id'=>$id]); //redirection vers l'index

    }


}