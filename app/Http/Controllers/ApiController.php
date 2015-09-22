<?php

namespace App\Http\Controllers;


use App\Model\Categories;
use App\Model\Directors;
use App\Model\Sessions;

class ApiController extends Controller{


    public function getBestDirectors(){


       $directors = Directors::all();
       // dump($directors->toJson());

        return response ()->json($directors);

    }



    public function getAllcatMovies(){

        $categories = Categories::AllcatMovies()->get()->toArray();



        $result = [];
        foreach($categories as $categorie){

            $tabe = array();
            $tabe[] = $categorie['title'];
            $tabe[] = (int)$categorie['nb'];

            $result[] = $tabe;


        }

        return $result;
    }




    public function getSessionsNb(){

        $tab [] = Sessions::SessionsNb()->get()->toArray();

       exit(dump($tab));


        return response ()->json($sessions);
    }




}