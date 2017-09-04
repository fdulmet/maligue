<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'lieu', 'ligue_id', 'season_id', 'date', 'heure'
    ];

    public function equipes()
    {
        return $this->belongsToMany('App\Equipe')->withPivot('buts');
    }

    public function latestTeam()
    {
        return $this->belongsToMany('App\Equipe')->withPivot('buts')->latest();
    }
}
