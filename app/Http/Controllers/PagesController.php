<?php

namespace App\Http\Controllers;
use App\Model\Cinema;
use App\Model\Movies;
use App\Model\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Model\Comments;
use App\Model\Sessions;
use App\Model\Recommandations;
use App\Model\Tasks;
use Illuminate\Support\Facades\Redirect;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */

class PagesController extends Controller
{


    /**
     *  page contact
     */
    public function contact()
    {
        return view('Pages/contact');

    }


    /**
     *  page mention
     */
    public function mention()
    {
        return view('Pages/mention');

    }

    /**
     *  page faq
     */
    public function faq()
    {
        return view('Pages/faq');

    }

    public function search(Request $request)
    {

        $title = $request->input('title');
        // dump($title);
        return view('Pages/search');

    }

    public function index()
    {
//
////        $m = new \MongoClient();
////        $db=$m->selectDB('laravel');
////        $collection = new \MongoCollection($db,'unicorns');
////
////        $find = array ('name' => 'Horny');
////
////        $result = $collection ->find($find);
////
////        foreach ($result as $document){
////            dump($document);
//        }
//
//        exit();


        $ageactor = DB::table('actors')->select(DB::raw('ROUND( AVG((TIMESTAMPDIFF( YEAR, dob,NOW() )))) as moyenne'))
            ->first();
        $actorlyon = DB::table('actors')->where('city', '=', 'Lyon')->count();
        $actormars = DB::table('actors')->where('city', '=', 'Marseille')->count();
        $actorparis = DB::table('actors')->where('city', '=', 'Paris')->count();

        $nbcom = DB::table('comments')->count();
        $comactif = DB::table('comments')->where('state', 2)->count();
        $comvalid = DB::table('comments')->where('state', 1)->count();
        $cominactif = DB::table('comments')->where('state', 0)->count();

        $sessions = Sessions::where('date_session', '>', new \DateTime('now'))->get();


        //exit (dump($nbcom));
        //exit (dump($ageactor));

        //exit (dump($actorlyon));

        // exit (dump($sessions));


        $data = [

            "ageactor" => $ageactor,
            "actorlyon" => $actorlyon,
            "actormars" => $actormars,
            "actorparis" => $actorparis,
            "nbcom" => $nbcom,
            "comactif" => $comactif,
            "comvalid" => $comvalid,
            "cominactif" => $cominactif,
            "comments" => Comments::all(),
            "sessions" => $sessions,


        ];


        return view('Pages/index', $data);





    }


    public function advenced(){


        $datas = [

            'markers' => Cinema::all(),
            'recommandations' => Recommandations::all(),
            'users' => Users::where('created_at','>', new \DateTime('-15 days'))->orderBy('created_at', 'desc',5)->get(),
            'movies' => Movies::all(),
            'tasks' => Tasks::all(),

        ];


        return view('Pages/advenced', $datas);
    }





    public function tasks(\Illuminate\Http\Request $request){


        Tasks::create([

            'content'=> $request->input('content'),
            'movies_id' =>  $request->input('movie'),
            'enabled' =>  0,
            'administrators_id' =>  Auth::user()->id,
            'date_tasks'=> date_create_from_format("d/m/Y",$request->date),


        ]);



        return Redirect::route('pages.advenced');

    }


    public function deletetasks($id){

        $task = Tasks::find($id);

        $task->enabled = 1;

        $task->save();



        return Redirect::route('pages.advenced');

    }


//    public function pro(){
//
//        return view('Pages/pro');
//    }


}