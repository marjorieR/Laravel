<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;







class UsersRequest extends FormRequest{

    public function authorize(){

        return true;
    }


    public function rules(){

        return [
            'username' => 'required|min:3',
            'avatar' => 'avatar',
            'email' => 'required|email|unique:user',
            'password' => 'required',
            'ville' => 'required',
            'zipcode' => 'required',



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