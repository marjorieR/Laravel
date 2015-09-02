<?php

namespace App\Http\Controllers;
use App\Model\Movies;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
/**
 * Class ActorsController
 * @package App\Http\Controllers
 */
class MoviesController extends Controller{


    /**
     *  page create
     */


    public function index(){

        $datas =[

            "movies" => Movies::all()
        ];

        return view('Movies/index',$datas);

    }


    public function create(){
        return view('Movies/create');

    }

    /**
     *  page read
     */
    public function read($id = null){

        $datas = [

            'movie' => Movies::find($id)];

        return view('Movies/read',$datas);

    }

    /**
     *  page Update
     */
    public function update($id){
        return view('Movies/update',['id'=>$id]);

    }

    /**
     *  page Delete
     */
    public function delete($id){

        $movie = Movies::find($id);
        $movie->delete();

        Session::flash('success',"le film {$movie->title} a bien été supprimé");

        return Redirect::route('movies.index');

    }

    public function search($languages= "fr",$visible = 1,$duree = 2){
        return view('/Movies/search',['languages'=>$languages,'visible'=>$visible,'duree'=>$duree]);
    }
}