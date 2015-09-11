<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actors represente la table actors
 * @package App\Model
 */
class Comments extends Model
{


    protected $table = 'comments';

    public $timestamps = false;

    protected $fillable = ['content', 'movies_id','user_id','date_created'];


    public function movies(){

        return $this->belongsTo('App\Model\Movies');



    }



}