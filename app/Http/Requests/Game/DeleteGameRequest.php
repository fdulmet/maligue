<?php

namespace App\Http\Requests\Game;

use Illuminate\Foundation\Http\FormRequest;
use App\League;
use Auth;

class DeleteGameRequest extends FormRequest
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
        return ($league && $user && $user->id === $league->owner->id);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
