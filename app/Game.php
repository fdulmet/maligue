<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function equipes()
    {
        return $this->belongsToMany('App\Equipe')->withPivot('buts');
    }
}
