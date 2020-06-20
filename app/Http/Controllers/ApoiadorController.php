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
        $apoiador = new Apoiador();
        
        $apoiador->nome = $request['nome'];
        $apoiador->sobre = $request['sobre'];

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

        $apoiador->nome = $request['nome'];
        $apoiador->sobre = $request['sobre'];

        if(isset($request['logo'])){

            Storage::delete($apoiador->logo);

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
        Storage::delete($apoiador->logo);

        $apoiador->delete();
        return redirect('/dashboard/apoio');

    }
}
