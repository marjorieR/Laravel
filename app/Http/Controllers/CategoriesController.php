<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;

use App\Model\Categories;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller{


    public function index()
    {

//        $category = DB::table('categories')
//            ->join('movies', 'categories.id', '=', "movies.categories_id")
//            ->groupBy('categories_id')
//            ->count();
//
//
//        dump( $category);
//
//
//
//
//        $datas =[
//
//
//
//           " category"=> $category
//
//        ];
//
//        return view('Categories/index',$datas);

    }


    public function create(){
        return view('Categories/create');

    }


    public function store(CategoriesRequest $request){

        // j'enregiste un nouvel acteur des que mon formulaire est valide ( zero erreurs)

        $categorie = new Categories();
        $categorie->title = $request->title;
        $categorie->description= $request->description;
        $categorie->image = $request->image;





        $filename =""; // define null
        if($request->file('image')){

            // save the name of file upload
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();

            //move upload
            $destinationPath = public_path() . '/uploads/categories'; //path vers public/
            $file->move($destinationPath,$filename); // move the image file into public upload
        }

        $categorie ->image =  asset("uploads/categories/". $filename);
        $categorie->save();

        Session::flash('success',"la categorie {$categorie->title} a bien été crée");

        return Redirect::route('categories.index');


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