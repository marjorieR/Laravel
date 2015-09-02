<?php

namespace App\Http\Controllers;
use App\Model\Actors;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


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
    public function read($id = null){

        $datas = [

            'actor' => Actors::find($id)];

        return view('Actors/read',$datas);

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
        // supprimer acteur
        $actor = Actors::find($id);
        $actor->delete();

        // j'écris un session un message flash
       Session::flash('success',"l'acteur {$actor->firstname}{$actor->lastname} a bien été supprimé");

        return Redirect::route('actors.index');

    }


}