<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN = 1;
    const ADMIN_LIGUE = 2;
    const CAPITAINE = 3;
    const JOUEUR = 4;

    protected $fillable = [
        'name',
        'title',
        'level',
    ];

    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->using('App\UserRole');
    }
}
