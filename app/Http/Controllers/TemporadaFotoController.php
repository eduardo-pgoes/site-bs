<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Temporada_Foto;
use App\Temporada;


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

        $request->validate([
            'fotos' => 'required',
            'temporada_id' =>'required'
        ]);
     
        foreach($request->file('fotos') as $file)
        {   
            $foto = new Temporada_Foto();
            
            $foto->temporada_id = $request->input('temporada_id');
            
            $path = $file->store('temporada_fotos',['disk'=>'public']); 
            $foto->caminho = $path;
            
            $foto->save();
        }

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

        Storage::disk('public')->delete($temporada_Foto->caminho);
        $ano = Temporada::where('id',$temporada_Foto->temporada_id)->first()->ano;
                
        $temporada_Foto->delete();

        return redirect('/dashboard/historia/'.$ano);
    }
}
