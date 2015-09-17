<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actors represente la table actors
 * @package App\Model
 */
class Administrators extends Model{


    protected $table = 'administrators';

    public $timestamps = false;




    public function tasks(){

        return $this->hasMany('App\Model\tasks');

    }
}

