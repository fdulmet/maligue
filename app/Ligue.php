<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ligue extends Model
{
    /**
     * Plusieurs équipes peuvent appartenir à une ligue.
     */
    public function equipes()
    {
        return $this->belongsToMany('App\Equipe');
    }
}
