<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Temporada;
use App\Post;
use App\Apoiador; 

class DashboardController extends Controller
{

    public function Historia($ano = null)
    {
        $anos = Temporada::get()->map(function ($item)
        {
           return $item->ano;
        })->sort()->reverse();

        $temporadaAtual = Temporada::where('ano',$ano)->first();

        if(!isset($temporadaAtual))
            return view('dashboard.historia',['anos'=>$anos]);
        else{

            $regionais = $temporadaAtual->regionais()->get();
            $fotos = $temporadaAtual->temporada_fotos()->get();

            return view('dashboard.historia',[
                'temporadaAtual' => $temporadaAtual,
                'regionais' => $regionais,
                'fotos' => $fotos,
                'anos' => $anos,
            ]);
        }
    
    } 
    
    public function Blog($url = null)
    {

        $posts = Post::get();

        $postAtual = Post::where('url',$url)->first();

        if(!isset($postAtual))
            return view('dashboard.blog',['posts'=>$posts]);
        else{

            $fotos = $postAtual->post_fotos()->get();

            return view('dashboard.blog',[
                'postAtual' => $postAtual,
                'fotos' => $fotos,
                'posts'=>$posts
                ]);
        }
    }

    public function Apoio($id = null)
    {
        $apoiadores = Apoiador::get();

        $apoiadorAtual = Apoiador::where('id',$id)->first();

        if(!isset($apoiadorAtual))
            return view('dashboard.apoio',['apoiadores' =>$apoiadores]);
        else
            return view('dashboard.apoio',[
                'apoiadorAtual' => $apoiadorAtual,
                'apoiadores' =>$apoiadores,
            ]);
    
    }
    
}



