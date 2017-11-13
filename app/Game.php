<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
  use SoftDeletes;

  protected $fillable = [
      'place', 'field', 'league_id', 'season_id', 'when', 'initial_game', 'canceled',
  ];

  protected $attributes = [

  ];

  protected $hidden = [

  ];

  protected $casts = [
    'canceled' => 'boolean',
  ];

  protected $dates = [
      'created_at',
      'updated_at',
      'deleted_at',
      'when',
  ];
  public function teams()
  {
      return $this->belongsToMany('App\Team', 'team_game')->withPivot('goals');
  }
  public function league()
  {
      return $this->belongsTo('App\League', 'league_id');
  }
  public function season()
  {
      return $this->belongsTo('App\Season');
  }
}
