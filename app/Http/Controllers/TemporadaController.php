<?php

namespace App\Http\Controllers;

use App\Temporada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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
        #TODO validação das entradas


        $temporada = new Temporada();

        $temporada->nome = $request['nome'];
        $temporada->video_url = $request['video_url'];
        $temporada->ano = $request['ano'];
        $temporada->descricao = $request['descricao'];
        $temporada->robo_desc = $request['robo_desc'];

        $path = $request->file('robo_foto')->store('public/robo_fotos');

        $temporada->robo_foto = $path;

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
        $temporada->nome = $request['nome'];
        $temporada->video_url = $request['video_url'];
        $temporada->ano = $request['ano'];
        $temporada->descricao = $request['descricao'];
        $temporada->robo_desc = $request['robo_desc'];

        if(isset($request['robo_foto'])){

            Storage::delete($temporada->robo_foto);

            $path = $request->file('robo_foto')->store('robo_fotos',['disk'=>'public']);

            $temporada->robo_foto = $path;
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
        Storage::delete($temporada->robo_foto);

        $temporada->delete();

        return redirect('/dashboard/historia');
    }
}
