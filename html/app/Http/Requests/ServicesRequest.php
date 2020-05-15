<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
    use \App\Services;
use Illuminate\Validation\Rule;

    class ServicesRequest extends FormRequest
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
            'user_id'=>'required',
            'name'=>'required',
            'discription'=>'required',
            'start'=>'required',
            'expiry'=>'required',
            'active'=>'required',
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
        'user_id' => 'User Id',
'name' => 'Name',
'discription' => 'Discription',
'start' => 'Start',
'expiry' => 'Expiry',
'active' => 'Active',

    ];
}

  
    }
    