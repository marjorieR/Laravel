<?php

namespace App\Http\Controllers;

use App\Model\Sessions;

/**
 * Class CommentsController
 * @package App\Http\Controllers
 */
class SessionsController extends Controller{



    public function ajaxsessions(){


        $sessions = Sessions::orderBy('id', 'desc')->get();

        return view('Pages/ajaxsessions',
            ['sessions' => $sessions]
        );
    }



}