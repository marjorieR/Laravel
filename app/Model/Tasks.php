<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Actors represente la table actors
 * @package App\Model
 */
class Tasks extends Model{



    protected $table = 'tasks';

    public $timestamps = false;





    public function administrators(){

        return $this->belongsTo('App\Model\administrators');
    }


    public function movies(){


        return $this->belongsTo('App\Model\Movies');
    }










}