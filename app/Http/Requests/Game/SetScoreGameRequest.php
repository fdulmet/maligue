<?php

namespace App\Http\Requests\Game;

use Illuminate\Foundation\Http\FormRequest;
use App\Game;
use Auth;

class SetScoreGameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $game = Game::with('teams', 'teams.captain')->find($this->route('gameId'));
        $authorize = false;
        $user = Auth::user();
        if (!$user || !$game) {
          return false;
        }
        foreach ($game->teams as $team) {
          if ($team->captain->id === $user->id) {
            $authorize = true;
          }
        }
        return $authorize;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'goal' => 'required|array|size:2',
            'goal.*' => 'required|integer|min:0',
        ];
    }
}
