<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SaveResultatMatchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->isAdmin() || Auth::user()->isAdminLigue() || Auth::user()->isCapitaine();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'buts_1' => 'required|numeric|min:0',
            'buts_2' => 'required|numeric|min:0',
        ];
    }

    public function response(array $errors)
    {
        if(!empty($errors))
        {
            foreach ($errors as $error)
            {
                flash($error[0])->error();
            }
        }
    }
}
