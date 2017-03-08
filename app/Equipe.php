<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
    ];
    /**
     * Plusieurs users peuvent appartenir à une équipe.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Plusieurs ligues peuvent appartenir à une équipe.
     */
    public function ligues()
    {
        return $this->belongsToMany('App\Ligue');
    }
}

/*public function user()
   {
       return $this->hasMany('App\User');//y'a aussi notamment belongsTo()
   }*/
