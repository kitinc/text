<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
  //tickets
  public function tickets(){
    return $this->hasMany('App\Ticket');
  }
}
