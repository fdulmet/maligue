<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class League extends Model
{
    use HasSlug;

    protected $fillable = [
        'name', 'slug', 'sport'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    /**
     * Plusieurs équipes peuvent appartenir à une ligue.
     */
    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Plusieurs équipes peuvent appartenir à une ligue.
     */
    public function teams()
    {
        return $this->belongsToMany('App\Team', 'team_league');
    }

    public function seasons()
    {
        return $this->hasMany('App\Season')->orderBy('name');
    }
}
