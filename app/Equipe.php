<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * @mixin \Eloquent
 * @package App
 */
class Equipe extends Model
{
    use SoftDeletes, HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'slug', 'user_id', 'logo'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('nom')
            ->saveSlugsTo('slug');
    }

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
