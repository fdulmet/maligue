<?php

namespace App\Http\Requests\Season;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeasonRequest extends FormRequest
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
        return ($user && $team && $league && $user->id === $league->owner->id);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'required|string',
          'date_start' => 'required|date',
          'date_end' => 'required|date',
          'is_archived' => 'nullable|boolean',
        ];
    }
}
