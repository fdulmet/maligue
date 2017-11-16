<?php

namespace App\Http\Requests\Invitation;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use App\Team;

class CreatePlayerInvitationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = Auth::user();
        $team = Team::where('slug', $this->route('teamSlug'))->first();
        return ($user && $team && ($user->id === $team->captain->id || $user->isAdmin));
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
