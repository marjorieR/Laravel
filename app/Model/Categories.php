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


    public function scopeAllcatMovies($query){


        return $query->select('categories.title',DB::raw("COUNT( movies.id ) as nb "))
            ->from('movies')
            ->join('categories', 'categories.id', '=', 'movies.categories_id')
            ->groupBy('categories.id');


    }


}
