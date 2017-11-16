<?php
namespace App\Http\Requests\Invitation;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use App\Invitation;
use App\User;

class RegisterInvitationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $invitation = Invitation::where('token', '=', $this->route('token'))->where('consumed', '=', false)->first();
        if ($invitation) {
          $invitedUser = User::where('email', '=', $invitation->email)->first();
          $user = Auth::user();
          if ($invitedUser && $user) {
            return ($user->email === $invitedUser->email);
          } else if (!$invitedUser && Auth::guest()) {
            return true;
          } else {
            return false;
          }
        } else {
          return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'register' => 'array',
            'register.first_name' => 'required_with:register|string|max:255',
            'register.last_name' => 'required_with:register|string|max:255',
            'register.phone'  => 'required_with:register|string|size:10',
            'register.password' => 'required_with:register|string|min:3|max:20|confirmed',
            'team' => 'array',
            'team.name' => 'required_with:team|string|min:3|max:255',
            'team.logo' => 'image',
        ];
    }
}
