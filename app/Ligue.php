<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Ligue extends Model
{
    use HasSlug;

    protected $fillable = [
        'nom', 'slug', 'sport'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('nom')
            ->saveSlugsTo('slug');
    }

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
