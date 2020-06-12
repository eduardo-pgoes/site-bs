<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Temporada;

class PagesController extends Controller
{
    
    public function apoio(){

        $files = Storage::files("/public/apoio");

        $files = array_map(function($file){
            return str_replace("public","storage",$file); 
        },$files);

        //O Logo da AJAPET não deve ser exibido com os outros
        $files = array_filter($files, function($file){
            return !strpos($file,"AJAPET");
        });

        return view('apoio')->with('files',$files);
    }

    public function historia($ano){

        $temp = Temporada::where('ano', $ano)->first();
        
        $regionais = $temp->regionais()->get();
        $fotos = $temp->temporada_fotos()->get();

        Log::info($temp);
        Log::info($regionais);
        Log::info($fotos);

        return view('historia',
        [
            'temporada'=> $temp,
            'regionais' => $regionais,
            'fotos' => $fotos,
        ]);
    }
}


