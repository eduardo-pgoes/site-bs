<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostFoto extends Model
{
    public function temporada(){
        return $this->belongsTo('App\Post');
    }
}
