<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Post;


class PostController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();

        $post->titulo = $request['titulo'];
        $post->conteudo = $request['conteudo'];
        $post->url = $request['url'];
        $post->resenha = $request['resenha'];

        $path = $request->file('post_foto')->store('temporada_fotos',['disk'=>'public']);
        $post->post_foto = $path;

        $post->save();

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->titulo = $request['titulo'];
        $post->conteudo = $request['conteudo'];
        $post->url = $request['url'];
        $post->resenha = $request['resenha'];

        if(isset($request['post_foto'])){

            Storage::delete($post->post_foto);

            $path = $request->file('post_foto')->store('temporada_fotos',['disk'=>'public']);

            $post->post_foto = $path;
        }

        $post->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->post_foto);

        $post->delete();
        
        return redirect('/dashboard/blog');
    }
}
