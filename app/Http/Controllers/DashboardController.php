<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Temporada;
use App\Post;
use App\Apoiador; 


class DashboardController extends Controller
{

    public function Historia($ano = null)
    {
        $temporadaAtual = Temporada::where('ano',$ano)->first();

        if(!isset($temporadaAtual))
            return view('dashboard.historia');
        else{

            $regionais = $temporadaAtual->regionais()->get();
            $fotos = $temporadaAtual->temporada_fotos()->get();

            return view('dashboard.historia',[
                'temporadaAtual' => $temporadaAtual,
                'regionais' => $regionais,
                'fotos' => $fotos,
                ]);
        }
    
    } 
    
    public function Blog($url = null)
    {
        $postAtual = Post::where('url',$url)->first();

        if(!isset($postAtual))
            return view('dashboard.blog');
        else{

            $fotos = $postAtual->post_fotos()->get();

            return view('dashboard.blog',[
                'postAtual' => $postAtual,
                'fotos' => $fotos,
                ]);
        }
    }

    public function Apoio($id = null)
    {
        $apoiadorAtual = Apoiador::where('id',$id)->first();

        if(!isset($apoiadorAtual))
            return view('dashboard.apoio');
        else
            return view('dashboard.apoio',['apoiadorAtual' => $apoiadorAtual]);
    
    }
    
}



