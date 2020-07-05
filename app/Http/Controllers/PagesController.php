<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Temporada;
use App\Post;
use App\Apoiador;

class PagesController extends Controller
{
    public function apoio(){
        $apoiadores = Apoiador::get();
        
        return view('apoio', ['apoiadores' => $apoiadores]);
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



