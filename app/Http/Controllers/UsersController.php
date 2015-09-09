<?php

namespace App\Http\Controllers;
use App\Model\Users;
use App\User;
use App\Http\Requests\UsersRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

/**
 * Class ActorsController
 * @package App\Http\Controllers
 */
class UsersController extends Controller{


    public function index(){

        $datas =[

            "users" => Users::all()
        ];

        return view('Users/index',$datas);

    }


    public function create(){
        return view('Users/create');

    }


    public function store(UsersRequest $request){

        $user = new Users();
        $user->username = $request->username;
        $user->avatar = $request->avatar;
        $user->email= $request->email;
        $user->password= $request->password;
        $user->ville= $request->ville;
        $user->zipcode= $request->zipcode;
        $user->enable= $request->enable;


        $filename ="";
        if($request->file('image')){


            $file = $request->file('image');
            $filename = $file->getClientOriginalName();


            $destinationPath = public_path() . '/uploads/user';
            $file->move($destinationPath,$filename);
        }

        $user ->image =  asset("uploads/user/". $filename);
        $user->save();

        Session::flash('success',"l'utilisateur{$user->username} a bien été crée");

        return Redirect::route('users.index');










    }






    public function read($id = null){

        $datas = [

            'user' => User::find($id)];

        return view('Users/read',$datas);

    }


    public function Update(){
        return view('Users/update');
    }




    public function delete($id){

        $user = Users::find($id);
        $user->delete();

       Session::flash('success',"l'utilisateur{$user->username} a bien été supprimé");

        return Redirect::route('users.index');

    }


    public function enabled($id){

        $user = Users::find($id);


        if( $user-> enabled == 1){
            $user-> enabled= 0;
        }else{
            $user-> enabled=1;
        }

        $user -> save();

        Session::flash('success',"modification utilisateur");

        return Redirect::route('users.index');
    }


    public function search($zipcode=69002,$ville="lyon",$actif=1){
        return view('/User/search',['zipcode'=>$zipcode,'ville'=>$ville,'actif'=>$actif]);
    }
}