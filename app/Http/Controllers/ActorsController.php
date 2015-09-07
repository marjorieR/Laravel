<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActorsRequest;
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
     * @param ActorsRequest est une classe de validation de formilaire
     * cette classe est liée a la requete, c'est une classe FormRequest
     * le mécanisme de validation de formulaire dans laravel
     * valide le formulaire et fait une redirection vers create
     * quand mon formulaire contient des erreurs sinon entre dans l'action store
     */


    public function store(ActorsRequest $request){

        // j'enregiste un nouvel acteur des que mon formulaire est valide ( zero erreurs)

        $actor = new Actors();
        $actor -> firstname =$request ->firstname;
        $actor -> lastname =$request ->lastname;
        $actor -> dob =$request ->dob;
        $actor -> nationality =$request ->nationality;
        $actor -> image =$request ->image;
        $actor -> biography =$request ->biography;
        $actor -> recompenses =$request ->recompenses;

        $actor->save();

        Session::flash('success',"l'acteur {$actor->firstname}{$actor->lastname} a bien été crée");

        return Redirect::route('actors.index');
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