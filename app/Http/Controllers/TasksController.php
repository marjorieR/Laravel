<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Model\Sessions;
use App\Model\Tasks;

/**
 * Class CommentsController
 * @package App\Http\Controllers
 */
class TasksController extends Controller{



    public function ajaxtasks(){


        $tasks = Tasks::orderBy('date_tasks', 'asc')->get();

        return view('Pages/ajaxtasks',
            ['tasks' => $tasks]
        );
    }


















}