<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class DirectorsRequest extends FormRequest{

    public function authorize(){

        return true;
    }


    public function rules(){

        return [
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'dob'=> 'required',
            'biography' => 'required|min:10|max:5000',
            'image' => 'image',



        ];
    }

    public function attributes(){

        return [
            'firstname'=> 'Prénom',
            'lastname'=> 'Nom',
            'dob'=> 'Date de naissance',
            'biography'=> 'Biographie',


        ];

    }


    public function messages(){

        return [
            'required'=> 'le champ :attribute est obligatoire'
        ];
    }

}