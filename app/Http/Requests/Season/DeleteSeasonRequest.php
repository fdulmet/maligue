<?php

namespace App\Http\Requests\Season;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use App\League;

class DeleteSeasonRequest extends FormRequest
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
        return ($user && $league && $user->id === $league->owner->id);
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
