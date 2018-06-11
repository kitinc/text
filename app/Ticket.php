<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
  //user
  public function user(){
    return $this->belongsTo('App\User');
  }
  //seat
  public function seat(){
    return $this->belongsTo('App\Seat');
  }
  //film
  public function film(){
    return $this->belongsTo('App\Film');
  }
  //campaign
  public function campaign(){
    return $this->belongsTo('App\Campaign');
  }
  public function status(){
    return $this->belongsTo('App\Status');
  }
}
