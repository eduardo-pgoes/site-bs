<?php

namespace App\Http\Controllers;

use App\Regional;
use App\Temporada;

use Illuminate\Http\Request;

class RegionalController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regional = new Regional();

        $regional->temporada_id = $request['temporada_id'];
        $regional->nome = $request['nome'];
        $regional->local = $request['local'];
        $regional->data = $request['data'];
        $regional->classificacao = $request['classificacao'];
        $regional->premios = $request['premios'];

        $regional->save();

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regional  $regional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regional $regional)
    {
        $regional->nome = $request['nome'];
        $regional->local = $request['local'];
        $regional->data = $request['data'];
        $regional->classificacao = $request['classificacao'];
        $regional->premios = $request['premios'];

        $regional->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regional  $regional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regional $regional)
    {
        $ano = Temporada::where('id',$regional->temporada_id)->first()->ano;
        $regional->delete();

        return redirect('/dashboard/historia/'.$ano);
    }
}
