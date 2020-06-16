<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Temporada_Foto;
use App\Temporada;

use Illuminate\Support\Facades\Log;

class TemporadaFotoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('foto')->store('temporada_fotos',['disk'=>'public']);
                
        $foto = new Temporada_Foto();

        $foto->temporada_id = $request['temporada_id'];
        $foto->caminho = $path;

        $foto->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Temporada_Foto  $temporada_Foto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        #FIXME laravel não consegue injetar pelo id

        $temporada_Foto = Temporada_Foto::where('id',$id)->first();

        Storage::delete($temporada_Foto->caminho);
        $ano = Temporada::where('id',$temporada_Foto->temporada_id)->first()->ano;
                
        $temporada_Foto->delete();

        return redirect('/dashboard/historia/'.$ano);
    }
}
