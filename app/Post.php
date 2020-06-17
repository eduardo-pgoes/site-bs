<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function post_fotos(){

        return $this->hasMany('App\PostFoto');

    }
}
