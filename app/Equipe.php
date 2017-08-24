<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipe extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'user_id', 'logo'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    // Plusieurs users peuvent appartenir à une équipe.
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    //Plusieurs ligues peuvent appartenir à une équipe.
    public function ligues()
    {
        return $this->belongsToMany('App\Ligue');
    }

    //Plusieurs matchs peuvent appartenir à une équipe.
    public function games()
    {
        return $this->belongsToMany('App\Game')->withPivot('buts');
    }
}

/*public function user()
   {
       return $this->hasMany('App\User');//y'a aussi notamment belongsTo()
   }*/
