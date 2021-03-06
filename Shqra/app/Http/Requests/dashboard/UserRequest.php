<?php

namespace App\Http\Requests\dashboard;

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
            'first_name'=>'required',
            'last_name'=>'required',
            'zip_code'=>'required',
            'phone'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'password'=>'required|required_with:conform-password|same:conform-password',
            'conform-password' => 'required'






        ];
    }
}
