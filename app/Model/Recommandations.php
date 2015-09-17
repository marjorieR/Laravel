<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Actors represente la table actors
 * @package App\Model
 */
class Recommandations extends Model{



    protected $table = 'recommandations';

    public $timestamps = false;





    public function cinema(){

        return $this->belongsTo('App\Model\Cinema');
    }


    public function movies(){


        return $this->belongsTo('App\Model\Movies');
    }










}