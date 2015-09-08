<?php

namespace App\Http\Controllers;
use App\Http\Requests\DirectorsRequest;
use App\Model\Directors;
use App\Model\Movies;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

/**
 * Class DirectorsController
 * @package App\Http\Controllers
 */




class DirectorsController extends Controller{




    public function index(){

        $datas =[

            "directors" => Directors::all()
        ];

        return view('Directors/index',$datas);

    }


    /**
     *  page create
     */
    public function create(){


        $data =[

            "movies" => Movies::all()
        ];

        return view('Directors/create',$data);

    }

    public function store(DirectorsRequest $request){

        // j'enregiste un nouvel acteur des que mon formulaire est valide ( zero erreurs)

        $director = new Directors();
        $director->firstname = $request->firstname;
        $director->lastname = $request->lastname;
        $director->dob = date_create_from_format("d/m/Y", $request->dob);
        $director->image = $request->image;
        $director->biography = $request->biography;



        $filename =""; // define null
        if($request->file('image')){

            // save the name of file upload
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();

            //move upload
            $destinationPath = public_path() . '/uploads/directors'; //path vers public/
            $file->move($destinationPath,$filename); // move the image file into public upload
        }

        $director ->image =  asset("uploads/directors/". $filename);
        $director->save();



        $tab = [];
        foreach($request->movies as $movie){
            $tab[] = array('movies_id'  => $movie, "directors_id" => $director->id);
        }

        DB::table('directors_movies')-> insert($tab);




        Session::flash('success',"le réalisateur {$director->firstname}{$director->lastname} a bien été crée");

        return Redirect::route('directors.index');


    }


    /**
     *  page read
     */
    public function read($id = null){

        $datas = [
            'director' => Directors::find($id)
        ];


        return view('Directors/read',$datas);

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

        $director = Directors::find($id);
        $director->delete();

        Session::flash('success',"le realisateur {$director->firstname}{$director->lastname} a bien été supprimé");

        return Redirect::route('directors.index');

    }


}