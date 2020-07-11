<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Regional;
use App\Temporada;


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
     
        $request->validate([
            'temporada_id' => 'required',
            'nome' => 'required',
            'local' => 'required',
            'data' => 'required',
            'classificacao' => 'required',
        ]);

        $regional = new Regional();

        $regional->temporada_id = $request->input('temporada_id');
        $regional->nome = $request->input('nome');
        $regional->local = $request->input('local');
        $regional->data = $request->input('data');
        $regional->classificacao = $request->input('classificacao');
        $regional->premios = $request->input('premios');

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

        $request->validate([
            'nome' => 'required',
            'local' => 'required',
            'data' => 'required',
            'classificacao' => 'required',
        ]);

        $regional->nome = $request->input('nome');
        $regional->local = $request->input('local');
        $regional->data = $request->input('data');
        $regional->classificacao = $request->input('classificacao');
        $regional->premios = $request->input('premios');

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
