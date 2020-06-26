<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\PostFoto;
use App\Post;


class PostFotoController extends Controller
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
            'foto' => 'required',
            'Post_id' => 'required',
        ]);

        $path = $request->file('foto')->store('Post_fotos',['disk'=>'public']);
                
        $foto = new PostFoto();

        $foto->Post_id = $request->input('Post_id');
        $foto->caminho = $path;

        $foto->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostFoto  $PostFoto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        #FIXME laravel não consegue injetar pelo id

        $PostFoto = PostFoto::where('id',$id)->first();

        Storage::disk('public')->delete($PostFoto->caminho);
        $url = Post::where('id',$PostFoto->Post_id)->first()->url;
                
        $PostFoto->delete();

        return redirect('/dashboard/historia/'.$url);
    }
}
