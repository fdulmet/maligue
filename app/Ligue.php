<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ligue extends Model
{
    protected $fillable = [
        'nom', 'sport'
    ];

    /**
     * Plusieurs équipes peuvent appartenir à une ligue.
     */
    public function equipes()
    {
        return $this->belongsToMany('App\Equipe');
    }

    public function seasons()
    {
        return $this->hasMany('App\Season');
    }
}
