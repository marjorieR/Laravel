<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


/**
 * Class PagesController
 * @package App\Http\Controllers
 */

class PagesController extends Controller{


    /**
     *  page contact
     */
    public function contact(){
        return view('Pages/contact');

    }

    /**
     *  page mention
     */
    public function mention(){
        return view('Pages/mention');

    }

    /**
     *  page faq
     */
    public function faq(){
        return view('Pages/faq');

    }

    public function search(Request $request){

        $title = $request-> input('title');
       // dump($title);
        return view('Pages/search');

    }



}