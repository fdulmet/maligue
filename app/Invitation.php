<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
  protected $fillable = [
    'email', 'team_id', 'league_id'
  ];

  protected $guarded = [
    'token'
  ];
  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [
      'token',
  ];

  public function team() {
    return $this->belongsTo('App\Team', 'team_id');
  }

  public function league() {
    return $this->belongsTo('App\League', 'league_id');
  }

  public function fromUser() {
    return $this->belongsTo('App\User', 'from_user');
  }

}
