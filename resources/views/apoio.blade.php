@extends('layouts.basic')

@section('content')
    <x-front-banner style="background-image: linear-gradient(180deg, rgba(30,56,35,0.8) 23%, 
        rgba(50,91,57,0.8) 100%), url('{{ asset('assets/Banners/Apoio.jpg')}}');">    
    
        <x-slot name="titulo"> Patrocinadores </x-slot> 
        Sem nossos patrocinadores, nada seria possível.<br>
        Cada um deles nos ajuda de uma forma e o conjunto de suas ações é de extrema importância para nossas atividades.                
    </x-front-banner>

    <div class="container text-center" style="padding-top:15px">
        <div style="margin: 30px 0px;">
            @foreach ($apoiadores as $apoiador)
                <div class="row  row-cols-1 row-cols-md-2 justify-content-around align-items-center" style="margin:25px 0" >               
                    @if($loop->odd)
                    <div class="col order-2 order-md-1">
                        <img src="{{ URL::asset('storage/'.$apoiador->logo) }}" style="width:100%"/>
                    </div>
                    <div class="col order-1 order-md-2">
                        <h3>{{$apoiador->nome}}</h3>
                        <p>{{$apoiador->sobre}}</p>
                    </div>
                    @else
                    <div class="col">
                        <h3>{{$apoiador->nome}}</h3>
                        <p>{{$apoiador->sobre}}</p>
                    </div>
                    <div class="col">
                        <img src="{{ URL::asset('storage/'.$apoiador->logo) }}" style="width:100%"/>
                    </div>
                    @endif
                </div>  
            @endforeach
        </div>
        <hr/>
        <div class="container" style="margin:10% 0">
            <h4>AJAPET</h4>
            <p class="text-justify" style="margin:15px 0px 30px 0px; padding:5px">
                A AJAPET (Associação Joseense para Apoio à Pesquisa e Ensino em Tecnologia)
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

