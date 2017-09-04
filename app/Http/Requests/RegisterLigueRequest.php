<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterLigueRequest extends FormRequest
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
            'nom' => 'required|max:100',
            'prenom' => 'required|max:100',
            'email' => 'required|email|confirmed|max:255|unique:users',
            'tel' => 'required',
            'password' => 'required|min:6|confirmed',
        ];
    }
}
