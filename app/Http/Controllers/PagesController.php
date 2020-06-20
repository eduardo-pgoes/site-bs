<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Temporada;
use App\Post;


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
    
    public function dashBlog($url = null)
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

    public function blog() {
        $posts = Post::get()->sort();

        return view('blog', ['posts' => $posts]);
    }

    public function post($url) {
        $post = Post::where('url',$url)->first();

        if ($post) {
            return view('post', ['post' => $post]);
        }
        else {
            abort(404);
        }
    }
}


