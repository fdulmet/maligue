<?php

namespace App\Http\Requests\Game;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $league = League::with(['season' => function($query) {
          $query->where('slug', $this->route('seasonSlug'));
        }])->where('slug', $this->route('leagueSlug'))->first();
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
            'place' => 'required|string',
            'field' => 'required|string',
            'when' => 'required|date',
            'canceled' => 'nullable|boolean',
        ];
    }
}
