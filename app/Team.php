<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Team extends Model
{
    use SoftDeletes, HasSlug;

    protected $fillable = [
      'name', 'slug', 'user_id', 'logo', 'sheet_url',
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
        'deleted_at',
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
    public function captain() {
      return $this->belongsTo('App\User', 'user_id');
    }
    // Plusieurs users peuvent appartenir à une équipe.
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    //Plusieurs ligues peuvent appartenir à une équipe.
    public function leagues()
    {
        return $this->belongsToMany('App\League', 'team_league');
    }

    //Plusieurs matchs peuvent appartenir à une équipe.
    public function games()
    {
        return $this->belongsToMany('App\Game', 'team_game')->withPivot('goals');
    }
}
