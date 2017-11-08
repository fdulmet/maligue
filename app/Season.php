<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Season extends Model
{
  use HasSlug;

  protected $fillable = [
      'name', 'slug', 'ligue_id', 'date_start', 'date_end', 'is_archived'
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

  public function league()
  {
      return $this->belongsTo('App\League');
  }
  public function games()
  {
    return $this->hasMany('App\Game')->orderBy('when');
  }
}
