<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
  protected $fillable = [
    'email', 'is_registered', 'invitation_type'
  ];
}
