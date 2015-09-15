<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Actors represente la table actors
 * @package App\Model
 */
class Cinema extends Model{



    protected $table = 'cinema';

    public $timestamps = false;





    public function sessions(){

        return $this->hasMany('App\Model\Sessions');

    }




}