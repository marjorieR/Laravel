<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;







class CategoriesRequest extends FormRequest{

    public function authorize(){

        return true;
    }


    public function rules(){

        return [
            'title' => 'required|min:3',
            'description' => 'required|min:10|max:5000',
            'image' => 'image',



        ];
    }

    public function attributes(){

        return [
            'title'=> 'Titre',

            'description'=> 'Description',


        ];

    }


    public function messages(){

        return [
            'required'=> 'le champ :attribute est obligatoire'
        ];
    }

}