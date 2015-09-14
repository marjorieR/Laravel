<?php

namespace App\Http\Controllers;

use App\Model\Comments;

/**
 * Class CommentsController
 * @package App\Http\Controllers
 */
class CommentsController extends Controller{


    /**
     * Page Index
     */
    public function index(){


        $comments = Comments::all();

        return view('Comments/index', ['comments' => $comments]);


    }




}