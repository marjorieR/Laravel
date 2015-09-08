<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;







class MoviesRequest extends FormRequest{

    public function authorize(){

        return true;
    }


    public function rules(){

        return [
            'title' => 'required|min:3',
            'duree' => 'required|alpha_num',
            'date_release'=> 'required',
            'synopsis' => 'required|min:10|max:5000',
            'image' => 'image',



        ];
    }

    public function attributes(){

        return [
            'title'=> 'Titre',
            'duree'=> 'Durée',
            'date_release'=> 'Date de sortie',
            'synopsis'=> 'Synopsis',


        ];

    }


    public function messages(){

        return [
            'required'=> 'le champ :attribute est obligatoire'
        ];
    }

}