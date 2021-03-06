<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
    use \App\User;
use Illuminate\Validation\Rule;

    class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
         *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
         *
     * @return array
     */
    public static function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',

        ];
    }


   
    
public function messages()
{
 	   return [
        //'first_name.required' => 'A first name is required by message',
            //'email.email'=>'invalid email'
    ];
}

    public function attributes()
{
    return [
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',

    ];
}

  
    }
    