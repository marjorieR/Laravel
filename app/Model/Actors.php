<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actors represente la table actors
 * @package App\Model
 */
class Actors extends Model{


    protected $table = 'actors';

    public $timestamps = false;

    protected $fillable = ['firstname'];
}