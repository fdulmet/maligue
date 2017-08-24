<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Season extends Model
{
    use HasSlug;

    protected $fillable = [
        'nom', 'slug', 'ligue_id', 'date_start', 'date_end', 'is_archived'
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
}
