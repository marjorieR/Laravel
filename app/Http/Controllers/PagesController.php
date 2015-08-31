<?php

namespace App\Http\Controllers;


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


}