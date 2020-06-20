@extends('layouts.basic')

@section('content')
    <div class="container text-center" style="padding-top:15px">

        <h1>Apoio</h1>
        <div style="margin: 30px 0px;">
            <p class="text-justify" style="padding:5px">
                Sem nossos patrocinadores, nada seria possível.
                Cada um deles nos ajuda de uma forma e o conjunto de suas ações
                é de extrema importância para nossas atividades.

            </p> 
            <div>               
                @foreach ($apoiadores as $apoiador)
                    @if($loop->last)
                        @if ($loop->odd)
                            <div class="row justify-content-around" style="margin:25px 0" >
                                <div class="col-5">
                                    <img src = "{{ URL::asset('storage/'.$apoiador->logo) }}" style="max-width:90%; " >
                                </div>
                            </div>
                        @else
                                <div class="col-5">
                                    <img src = "{{ URL::asset('storage/'.$apoiador->logo) }}" style="max-width:90%; " >
                                </div>
                            </div>
                        @endif
                    @else
                        @if ($loop->odd)
                            <div class="row justify-content-around" style="margin:25px 0" >
                                <div class="col-5">
                                    <img src = "{{ URL::asset('storage/'.$apoiador->logo) }}" style="max-width:90%; " >
                                </div>
                        @else
                                <div class="col-5">
                                    <img src = "{{ URL::asset('storage/'.$apoiador->logo) }}" style="max-width:90%; " >
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <hr/>
        <div class="container" style="margin:10% 0">
            <h4>AJAPET</h4>
            <p class="text-justify" style="margin:15px 0px 30px 0px; padding:5px">
                A AJAPET (Associação Joseense para Apoio à pesquisa e Ensino em Tecnologia)
                é uma instituição sem fins lucrativos, 
                criada em 2018 pela diretoria da equipe para representar o time juridicamente
                e sustentar suas atividades. É composta por alguns de nossos mentores,
                alunos maiores de idade e pais, que atuam juntos na captação de patrocínios,
                gestão financeira e do planejamento das atividades educacionais 
                e comunitárias da equipe. 
            </p> 
            <img src = "{{ URL::asset('assets/AJAPET.png') }}" style="width:80%" >
        </div>
    </div>    
@endsection

