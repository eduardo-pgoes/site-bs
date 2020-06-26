<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Apoiador;


class ApoiadorController extends Controller
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
            'sobre' => 'required',
            'logo' => 'required',
        ]);

        $apoiador = new Apoiador();
        
        $apoiador->nome = $request->input('nome');
        $apoiador->sobre = $request->input('sobre');

        $path = $request->file('logo')->store('Apoio_logos',['disk'=>'public']);
        $apoiador->logo = $path;

        $apoiador->save();

        return back();
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apoiador  $apoiador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apoiador $apoiador)
    {   


        $request->validate([
            'nome' => 'required',
            'sobre' => 'required',
        ]);

        $apoiador->nome = $request->input('nome');
        $apoiador->sobre = $request->input('sobre');

        if($request->has('logo')){

             Storage::disk('public')->delete($apoiador->logo);

            $path = $request->file('logo')->store('Apoio_logos',['disk'=>'public']);

            $apoiador->logo = $path;
        }

        $apoiador->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apoiador  $apoiador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apoiador $apoiador)
    {
         Storage::disk('public')->delete($apoiador->logo);

        $apoiador->delete();
        return redirect('/dashboard/apoio');

    }
}
