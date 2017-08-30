<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'lieu', 'ligue_id', 'season_id', 'date', 'heure'
    ];

    public function equipes()
    {
        return $this->belongsToMany('App\Equipe')->withPivot('buts');
    }
}
