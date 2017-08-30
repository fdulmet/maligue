<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreerMatchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->isAdmin() || Auth::user()->isAdminLigue();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'lieu' => 'required',
            'date' => 'required',
            'ligue_id' => 'required',
            'season_id' => 'required',
            'equipe1' => 'required',
            'equipe2' => 'required',
        ];
    }
}
