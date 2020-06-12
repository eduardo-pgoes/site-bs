<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada_Foto extends Model
{
    public function temporada(){

        return $this->belongsTo('App\Temporada');
        
    }
}
