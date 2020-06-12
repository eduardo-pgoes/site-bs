<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    public function temporada(){

        return $this->belongsTo('App\Temporada');
        
    }
}
