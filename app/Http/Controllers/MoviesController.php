<?php

namespace App\Http\Controllers;

use App\Http\Requests\MoviesRequest;
use App\Model\Actors;
use App\Model\Categories;
use App\Model\Directors;
use App\Model\Movies;
use Illuminate\Support\Facades\DB;
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


    public function index($bo="*", $visibilite="*", $distributeur="*"){

        $movies = DB::table('movies');
        if ($bo != "*") {
            $movies->where('bo', '=', $bo);
        }
        if ($visibilite != "*") {
            $movies->where('visible', '=', $visibilite);
        }
        if ($distributeur != "*") {
            $movies->where('distributeur', '=', $distributeur);
        }

        $nbfilms = DB::table('movies')->count();

        $filmscover = DB::table('movies')-> where('cover',1)-> count();

        $filmsav = DB::table('movies')-> where('date_release', '>', DB::raw('DATE_ADD(NOW(),INTERVAL 1 DAY)'))-> count();

        //dump( $filmsav);
        $invisible = DB::table('movies')-> where('visible',0)-> count();

        $budget = DB::table('movies')->where('annee','=', 2015)-> sum('budget');




        //dump( $filmscover = DB::table('movies')->count("cover"1));

        //retourne le resultat
        $movies = $movies->get();

        $data = [
            "movies" => $movies,
            "bo" => $bo,
            "visibilite" => $visibilite,
            "distributeur" => $distributeur,
            "nbfilms" => $nbfilms,
            "filmscover"=> $filmscover,
            "invisible"=> $invisible,
            "filmsav"=> $filmsav,
            "budget"=> $budget




        ];


        return view('Movies/index', $data);

    }


    public function create(){

        $data =[

            "actors" => Actors::all(),
            "directors" => Directors::all(),
            "categories" => Categories::all()
        ];



        return view('Movies/create',$data);





        return view('Movies/create');

    }

        public function store(MoviesRequest $request)
        {

            // j'enregiste un nouvel acteur des que mon formulaire est valide ( zero erreurs)

            $movie = new Movies();
            $movie->title = $request->title;
            $movie->duree = $request->duree;
            $movie->date_release = date_create_from_format("d/m/Y", $request->date_release);
            $movie->annee = $request->annee;
            $movie->image = $request->image;
            $movie->bo=$request->bo;
            $movie->visible=$request->visible;
            $movie->cover=$request->cover;
            $movie->budget = $request->budget;
            $movie->synopsis = $request->synopsis;
            $movie->categories_id = $request->categories;


            $filename = ""; // define null
            if ($request->file('image')) {

                // save the name of file upload
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();

                //move upload
                $destinationPath = public_path() . '/uploads/movies'; //path vers public/
                $file->move($destinationPath, $filename); // move the image file into public upload
            }

            $movie->image = asset("uploads/movies/" . $filename);
            $movie->save();


            // exit(dump($request->actors));


            $tab = [];
            $tab2 = [];



            //exit(dump($request->actors));







            if (count($request->actors) > 0) {

                foreach ($request->actors as $actor) {
                    $tab[] = array('actors_id' => $actor, "movies_id" => $movie->id);
                }

                DB::table('actors_movies')->insert($tab);

            }


            if (count($request->directors) > 0) {

                foreach ($request->directors as $director) {
                    $tab2[] = array('directors_id' => $director, "movies_id" => $movie->id);

                }

                DB::table('directors_movies')->insert($tab2);

            }


            Session::flash('success', "le film {$movie->title} a bien été crée");

            return Redirect::route('movies.index');


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

    public function activation($id){

        $movie = Movies::find($id);


        if($movie-> visible == 1){
            $movie-> visible= 0;
        }else{
            $movie->visible=1;
        }

        $movie -> save();

        Session::flash('success',"votre film a était mis a jour");

        return Redirect::route('movies.index');

    }



    public function cover($id){

        $movie = Movies::find($id);


        if($movie-> cover == 1){
            $movie-> cover= 0;
        }else{
            $movie-> cover=1;
        }

        $movie -> save();

        Session::flash('success',"cover a était mis a jour");

        return Redirect::route('movies.index');
    }



//    public function actions(){
//
//
//
//        $movietab =[
//
//         if ($actions == "Supprimer") {
//
//
//             foreach ($movies as $movie) {
//                 $movie = Movies::find();
//                 $movie->delete();
//
//
//             }
//
//         }
//
//
//       ];
//










}