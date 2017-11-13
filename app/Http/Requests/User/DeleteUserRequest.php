<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use App\User;

class DeleteUserRequest extends FormRequest
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
        return ($currentUser->id === $targetUser->id);
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
