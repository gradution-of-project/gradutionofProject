<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    //

    public function post(){
      return   $this->hasMany('App\post');
    }
    public function comment(){
     return   $this->hasMany('App\comment');
    }
}
