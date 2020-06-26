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

        $request->validate([
            'titulo' => 'required',
            'conteudo' => 'required',
            'url' => 'required',
            'resenha' => 'required',
            'post_foto' => 'required'
        ]);

        $post = new Post();

        $post->titulo = $request->input('titulo');
        $post->conteudo = $request->input('conteudo');
        $post->url = $request->input('url');
        $post->resenha = $request->input('resenha');

        $path = $request->file('post_foto')->store('post_banner',['disk'=>'public']);
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

        $request->validate([
            'titulo' => 'required',
            'conteudo' => 'required',
            'url' => 'required',
            'resenha' => 'required',
        ]);
     
        $post->titulo = $request->input('titulo');
        $post->conteudo = $request->input('conteudo');
        $post->url = $request->input('url');
        $post->resenha = $request->input('resenha');

        if($request->has('post_foto')){

             Storage::disk('public')->delete($post->post_foto);

            $path = $request->file('post_foto')->store('post_banner',['disk'=>'public']);

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
         Storage::disk('public')->delete($post->post_foto);

        $post->delete();
        
        return redirect('/dashboard/blog');
    }
}
