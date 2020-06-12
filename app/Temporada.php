<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    public function temporada_fotos(){

        return $this->hasMany('App\Temporada_Foto');
        
    }

    public function regionais(){

        return $this->hasMany('App\Regional');
        
    }
}
