<?php

namespace App\Http\Requests\User;

use Auth;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $currentUser = Auth::user();
        $targetUser = User::find($this->route('userId'));
        return ($currentUser->id === $targetUser->id || $currentUser->isAdmin);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'first_name' => 'string|max:255',
          'last_name' => 'string|max:255',
          'phone' => 'string|size:10',
          'email => string|email',
          'password => string|min:6|max:32|confirmed',
        ];
    }
}
