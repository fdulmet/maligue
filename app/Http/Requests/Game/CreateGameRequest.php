<?php

namespace App\Http\Requests\Game;

use App\League;
use Illuminate\Foundation\Http\FormRequest;
use Auth;

class CreateGameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $league = League::where('slug', $this->route('leagueSlug'))->first();
        $user = Auth::user();
        return ($league && $user && ($user->id === $league->owner->id || $user->isAdmin));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
        ];
    }
}
