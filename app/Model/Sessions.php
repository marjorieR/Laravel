<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actors represente la table actors
 * @package App\Model
 */
class Sessions extends Model
{


    protected $table = 'sessions';

    public $timestamps = false;

    protected $fillable = ['cinema_id', 'movies_id','date_session'];


    public function movies(){

        return $this->belongsTo('App\Model\Movies');



    }

    public function cinema(){

        return $this->belongsTo('App\Model\Cinema');



    }




}