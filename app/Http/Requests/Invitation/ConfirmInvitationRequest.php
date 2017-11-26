<?php
namespace App\Http\Requests\Invitation;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use App\Invitation;
use App\User;

class ConfirmInvitationRequest extends FormRequest
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
        ];
    }
}
