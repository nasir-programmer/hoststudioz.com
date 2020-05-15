<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
    use \App\Payments;
use Illuminate\Validation\Rule;

    class PaymentsRequest extends FormRequest
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
            'service_id'=>'required',
            'request'=>'required',
            'response'=>'required',
            'created_at'=>'required',
            'updated_at'=>'required',
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
            'service_id' => 'Service Id',
            'request' => 'Request',
            'response' => 'Response',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

  
    }
    