<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        return view('historia',
        [
            'temporada'=> $temp,
            'regionais' => $regionais,
            'fotos' => $fotos,
        ]);
    }

    public function dashHistoria($ano = null)
    {
        $temporadas = Temporada::get()->sort()->reverse();

        $temporadaAtual = Temporada::where('ano',$ano)->first();

        if(!isset($temporadaAtual))
            return view('historia-dashboard',['temporadas'=>$temporadas]);
        else{

            $regionais = $temporadaAtual->regionais();
            $fotos = $temporadaAtual->temporada_fotos();

            return view('historia-dashboard',[
                'temporadas' => $temporadas,
                'temporadaAtual' => $temporadaAtual,
                'regionais' => $regionais,
                'fotos' => $fotos,
                ]);
        }
    
    }

    public function blog(){
        return view('blog');
    }
}


