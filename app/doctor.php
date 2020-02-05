<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    public function post()
    {
        return $this->hasMany('App\post');
    }

    public function comment()
    {
        return $this->hasMany('App\comment');
    }


}
