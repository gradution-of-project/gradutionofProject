<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //

    public function user(){
      return  $this->belongsTo('App/user');
    }
    public function doctor(){
      return  $this->belongsTo('App/doctor');
    }
    public function post(){
      return   $this->belongsTo('App/post');
    }

}
