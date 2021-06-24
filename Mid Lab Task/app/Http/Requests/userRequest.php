<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
    public function rules()
    {
        return [
            'email'=> 'required|regex:/^.+@.+$/i|max:50',
            'password'=> 'required|min:8|max:20'
        ];
    }

    public function messages()
    {
        return [
            'email.required'=> 'Can not be empty... ' ,
            'email.regex'=> 'Please enter a valid email format... ' ,
            'email.max'=> 'The email can not be larger then 50 words...' ,
            
            'password.required'=> 'Can not be empty... ' ,
            'password.regex'=> 'Password missmatched... ' ,
            'password.max'=> 'Password missmatched...' ,
            'password.min'=> 'Password missmatched...' ,
            
        ];
    }
}
