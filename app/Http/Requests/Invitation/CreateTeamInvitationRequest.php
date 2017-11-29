<?php

namespace App\Http\Requests\Invitation;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use App\League;

class CreateTeamInvitationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // $user = Auth::user();
        // $league = League::where('slug', $this->route('leagueSlug'))->first();
        // return ($user && $league && ($user->id === $league->owner->id || $user->isAdmin));
        return Auth::user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'emails' => 'required|array',
          'emails.*' => 'required|email',
        ];
    }
}
