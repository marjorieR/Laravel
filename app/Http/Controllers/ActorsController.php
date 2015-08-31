<?php

namespace App\Http\Controllers;


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

            "acteurs"=>[

                ["nom" => "Boyer","Prenom" =>"Julien", "age" =>27],
                ["nom" => "De Brito","Prenom" =>"Thaïs", "age" =>27],
                ["nom" => "Rouquet","Prenom" =>"Marjorie", "age" =>31],
                ["nom" => "Lehne","Prenom" =>"Mathieu", "age" =>33],

                ],

            'title'=> "Liste des acteurs",
            "noms" =>["julien","Mathieu","Jessy","Thaïs","Marjorie"],
            "age" => [27,33,22,27,31],

            "localite"=>[

                "Paris" =>["Jessy", "Marjorie","Daniel"],

            "Lyon" => ["Thaïs","Julien","Mathieu"]

            ]
        ];

        return view('Actors/index',$datas);

    }


    public function create(){
        return view('Actors/create');

    }

    /**
     *  page read
     */
    public function read($firstname,$lastname){

        return view('Actors/read',['firstname'=>$firstname],['lastname'=>$lastname]);

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