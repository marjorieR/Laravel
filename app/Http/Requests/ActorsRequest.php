<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class ActorsRequest extends FormRequest{

    public function authorize(){

        return true;
    }


    public function rules(){

        return [
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'nationality' => 'required',
            'biography' => 'required|min:10|max:5000',
            'recompensgues' => 'min:5|max:500',
            'image' => 'required|url',
            'dob'=> 'required|date_format:d/m/Y|before:now',


        ];
    }

    public function attributes(){

        return [
            'firstname'=> 'Prénom',
            'lastname'=> 'Nom',
            'dob'=> 'Date de naissance',
            'recompenses'=> 'Récompense',
            'biography'=> 'Biographie',


        ];

    }


    public function messages(){

        return [
            'required'=> 'le champ :attribute est obligatoire'
        ];
    }

}