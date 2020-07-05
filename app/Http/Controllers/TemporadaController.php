<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

use App\Temporada;


class TemporadaController extends Controller
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
            'nome' => 'required',
            'video_url' => 'required',
            'ano' => 'bail|required|size:4|unique:App\Temporada,ano',
            'descricao' => 'required|min:20',
            'robo_desc' => 'required|min:20',
            'robo_foto' => 'required',
            'banner' => 'required',
        ]);

        $temporada = new Temporada();

        $temporada->nome = $request->input('nome');
        $temporada->video_url = $request->input('video_url');
        $temporada->ano = $request->input('ano');
        $temporada->descricao = $request->input('descricao');
        $temporada->robo_desc = $request->input('robo_desc');

        $path_robo = $request->file('robo_foto')->store('robo_fotos',['disk'=>'public']);
        $path_banner = $request->file('robo_foto')->store('temporada_banners',['disk'=>'public']);

        $temporada->robo_foto = $path_robo;
        $temporada->banner = $path_banner;

        $temporada->save();

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Temporada  $temporada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temporada $temporada)
    {

        $request->validate([
            'nome' => 'bail|required',
            'video_url' => 'required',
            'ano' => ['bail','required','size:4', Rule::unique('temporadas')->ignore($temporada->id)],
            'descricao' => 'bail|required|min:20',
            'robo_desc' => 'bail|required|min:20',
        ]);

        $temporada->nome = $request->input('nome');
        $temporada->video_url = $request->input('video_url');
        $temporada->ano = $request->input('ano');
        $temporada->descricao = $request->input('descricao');
        $temporada->robo_desc = $request->input('robo_desc');

        if($request->has('robo_foto')){

            Storage::disk('public')->delete($temporada->robo_foto);

            $path = $request->file('robo_foto')->store('robo_fotos',['disk'=>'public']);

            $temporada->robo_foto = $path;
        }        
        
        if($request->has('banner')){

            Storage::disk('public')->delete($temporada->banner);

            $path = $request->file('banner')->store('temporada_banners',['disk'=>'public']);

            $temporada->banner = $path;
        }

        $temporada->save();


        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Temporada  $temporada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temporada $temporada)
    {

        foreach ($temporada->temporada_fotos()->get() as $foto){
            Storage::disk('public')->delete($foto->caminho);
        }
        
        Storage::disk('public')->delete($temporada->robo_foto);
        Storage::disk('public')->delete($temporada->banner);

        $temporada->delete();
        return redirect('/dashboard/historia');
    }
}
