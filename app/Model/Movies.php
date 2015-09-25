<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Actors represente la table actors
 * @package App\Model
 */
class Movies extends Model{


    use SoftDeletes;

    protected $table = 'movies';

    public $timestamps = false;

    protected $dates =['date_deleted'];



    public function comments(){

        return $this->hasMany('App\Model\Comments');

    }

    public function sessions(){

        return $this->hasMany('App\Model\Sessions');

    }


    public function recommandations(){

        return $this->hasMany('App\Model\Recommandations');

    }


    public function tasks(){

        return $this->hasMany('App\Model\tasks');

    }



    public function categories(){

        return $this->belongsTo('App\Model\Categories');

    }




}