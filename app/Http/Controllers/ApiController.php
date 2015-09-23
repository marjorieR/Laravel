<?php

namespace App\Http\Controllers;


use App\Model\Categories;
use App\Model\Directors;
use App\Model\Sessions;
use Illuminate\Support\Facades\Session;

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

//        $tables= Categories::AllcatMovies(4)->orderBy('id', 'asc')->get()->toArray();
//
////        exit(dump($tables));
//
//
//        foreach($tables as $table) {
//
//
//            $table1[] = $budget1 = DB::table('movies')
//                ->select(DB::raw("SUM(budget) as budget"))
//                ->whereBetween('annee', array(1980, 1990))
//                ->where('categories_id', $table['id'])
//                ->first();
//
//
//            $table2[] = $budget2 = DB::table('movies')->select(DB::raw("SUM(budget) as budget"))
//                ->whereBetween('annee', array(1990, 2000))
//                ->where('categories_id', $table['id'])
//
//                ->first();
//
//
//            $table3[] = $budget3 = DB::table('movies')->select(DB::raw("SUM(budget) as budget"))
//                ->whereBetween('annee', array(2000, 2015))
//                ->where('categories_id', $table['id'])
//
//                ->first();
//        }
//
//
//        exit (dump( $table1, $table2, $table3));
//    }
    }




    public function getSessionsNb(){

        $tab =[];

        for($i = 1 ; $i <= 12 ; $i++) {

            $tab [] = Sessions::SessionsNb($i)->toArray();


        }


        $result=[];

        foreach($tab as $elt){

            $result[]=(int)$elt['nbs'];


        }


//       exit(dump($result));







        return response ()->json($result);



    }




}