<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Actors represente la table actors
 * @package App\Model
 */
class Categories extends Model{


    protected $table = 'categories';

    public $timestamps = false;

    protected $fillable = ['title'];







    public function movies(){

        return $this->hasMany('App\Model\Movies');

    }



    public function scopeAllcatMovies($query,$limit = 10){


        return $query->select('categories.id','categories.title',DB::raw("COUNT( movies.id ) as nb "))
            ->from('movies')
            ->join('categories', 'categories.id', '=', 'movies.categories_id')
            ->groupBy('categories.id')
            ->take($limit);




    }




    public function scopeSommeBudget($query,$periode , $category){

           return $query->from('movies')
                ->select(DB::raw("SUM(budget) as budget"))
                ->whereBetween('annee', $periode)
                ->where('categories_id', $category)
                ->first();



    }

}
