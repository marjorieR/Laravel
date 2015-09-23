<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Actors represente la table actors
 * @package App\Model
 */
class Sessions extends Model{


    protected $table = 'sessions';

    public $timestamps = false;

    protected $fillable = ['cinema_id', 'movies_id','date_session'];


    public function movies(){

        return $this->belongsTo('App\Model\Movies');



    }

    public function cinema(){

        return $this->belongsTo('App\Model\Cinema');



    }


    public function scopeSessionsNb($query, $i){


//        return $query->select(DB::raw("COUNT( date_session ) as nbs "))
//            ->from('sessions')
//            ->groupBy(DB::raw("MONTH(date_session"));




           return $query->select(DB::raw("COUNT( date_session ) as nbs "))
                ->from('sessions')
                ->where(DB::raw("MONTH(date_session)"),$i)
                ->first();



    }






}