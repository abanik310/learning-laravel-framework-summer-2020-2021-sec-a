<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
    public function rules()
    {
        return [
            'uname' => 'required|min:5',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'uname.required' => 'Cant left empty',
            'uname.min' => 'Atleast 5 character required!',
            'password.required' => 'Password field cant be empty!'
        ];
    }
}
