<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Comments;
use App\Model\Sessions;

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

    public function index(){


        $ageactor = DB::table('actors')->select(DB::raw('ROUND( AVG((TIMESTAMPDIFF( YEAR, dob,NOW() )))) as moyenne'))
            ->first();
        $actorlyon = DB::table('actors')-> where('city','=','Lyon')-> count();
        $actormars = DB::table('actors')-> where('city','=','Marseille')-> count();
        $actorparis = DB::table('actors')-> where('city','=','Paris')-> count();

        $nbcom = DB::table('comments')-> count();
        $comactif = DB::table('comments')-> where('state',2)-> count();
        $comvalid = DB::table('comments')->where('state',1)->count();
        $cominactif= DB::table('comments')->where('state',0)->count();

        $sessions= Sessions::where('date_session', '>', new \DateTime('now'))->get();




        //exit (dump($nbcom));
        //exit (dump($ageactor));

        //exit (dump($actorlyon));

        // exit (dump($sessions));


        $data = [

            "ageactor" => $ageactor,
            "actorlyon"=> $actorlyon,
            "actormars"=> $actormars,
            "actorparis"=> $actorparis,
            "nbcom" => $nbcom,
            "comactif" => $comactif,
            "comvalid" => $comvalid,
            "cominactif" => $cominactif,
            "comments" => Comments::all(),
            "sessions" => $sessions,


        ];


        return view('Pages/index',$data);








    }

}