@extends('layouts.basic')

@section('content')
    <x-front-banner style="background-image: linear-gradient(180deg, rgba(30,56,35,0.8) 23%, 
        rgba(50,91,57,0.8) 100%), url('{{ asset('assets/homebanner.jpg')}}');">    
    
        <x-slot name="titulo"> Apoio </x-slot> 
        Sem nossos apoiadores, nada seria possível.                
    </x-front-banner>

    #TODO Escolher um dos três padroes
    <div class="container text-center" style="padding-top:15px">
    <div style="margin: 30px 0px;">
            <div class="row row-cols-2 justify-content-around align-items-center" style="margin:25px 0" >               
                @foreach ($apoiadores as $apoiador)
                    <div class="col">
                        <img src = "{{ URL::asset('storage/'.$apoiador->logo) }}" style="max-width:90%; " >
                        <x-modal :id="$loop->index" >
                            <x-slot name="titulo"> {{$apoiador->nome}} </x-slot>
                            {{$apoiador->sobre}}
                        </x-modal>
                    </div>
                @endforeach
            </div>
        </div>
        <hr/>
        <div style="margin: 30px 0px;">
            <div class="row row-cols-2 justify-content-around align-items-center" style="margin:25px 0" >               
                @foreach ($apoiadores as $apoiador)
                    <div class="col">
                        <x-flip-card src_imagem="{{ URL::asset('storage/'.$apoiador->logo) }}">
                            <h3>{{$apoiador->nome}}</h3>
                            <p>{{$apoiador->sobre}}</p>
                        </x-flip-card>
                    </div>
                @endforeach
            </div>
        </div>
        <hr/>
        <div style="margin: 30px 0px;">
            <div class="row row-cols-2 justify-content-around align-items-center" style="margin:25px 0" >               
                @foreach ($apoiadores as $apoiador)
                    <div class="col">
                        <h3>{{$apoiador->nome}}</h3>
                        <img src="{{ URL::asset('storage/'.$apoiador->logo) }}" style="width:100%"/>
                        <p>{{$apoiador->sobre}}</p>
                    </div>
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
            <img src = "{{ URL::asset('assets/AJAPET.png') }}" style="width:90%" >
        </div>
    </div>    
@endsection

