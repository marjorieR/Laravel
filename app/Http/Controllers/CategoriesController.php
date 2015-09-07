<?php

namespace App\Http\Controllers;



use App\Model\Categories;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller{


    public function index()
    {

        $category = DB::table('categories')
            ->join('movies', 'categories.id', '=', "movies.categories_id")
            ->groupBy('categories_id')
            ->count();


        dump( $category);




        $datas =[



           " category"=> $category

        ];

        return view('Categories/index',$datas);

    }


    public function create(){
        return view('Categories/create');

    }


    public function read(){

        return view('Categories/read');
    }



    public function update(){

        return view('Categories/update');
    }

    public function delete(){
        return redirect('/categories/index');
    }



//    public function movies(){
//        return $this->hasmany('App\Movies');
//    }


}