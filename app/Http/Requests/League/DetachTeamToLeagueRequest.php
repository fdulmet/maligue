<?php

namespace App\Http\Requests\League;

use Illuminate\Foundation\Http\FormRequest;

class DetachTeamToLeagueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = Auth::user();
        $league = League::where('slug', $this->route('leagueSlug'))->first();
        $team = Team::where('slug', $this->route('teamSlug'))->first();
        return ($user && $team && $league && ($user->id === $league->owner->id || $user->isAdmin));
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
