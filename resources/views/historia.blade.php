@extends('layouts.basic')

@section('content')
    <x-front-banner style="background-image: linear-gradient(180deg, rgba(30,56,35,0.8) 23%, 
        rgba(50,91,57,0.8) 100%), url('{{ URL::asset('storage/'.$temporada->banner) }}');">    
    
        <x-slot name="titulo"> {{$temporada->nome}} </x-slot> 
    </x-front-banner>

        <div style="margin: 2rem">
        <div class="container">
            <div class='row'>
                <div class='col-sm-5'>
                    <h5>
                        {{ $temporada->descricao }}
                    </h5>
                </div>
                <div class='col-sm-7'>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315"
                            src="{{ $temporada->video_url }}" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <div class='row'>
            <div class='col-sm-6'>
                <img style="width:100%" src="{{ URL::asset('storage/'.$temporada->robo_foto) }}" alt="Foto de exibição do Robô">
            </div>
            <div class='col-sm-6'>
                <h1 style="font-weight: bold;">
                    O Robô
                </h1>
                <h5>
                    {{ $temporada->robo_desc }}
                </h5>
            </div>
        </div>  
    </div>
     
    @if(isset($regionais[0]))  
        <div style="margin: 2rem 0">
            <div class="container">         
                    <h1 style="font-weight: bold;">
                        Competições
                    </h1>
                @foreach($regionais as $regional)
                    <h5>
                        {{ $regional->nome }}
                    </h5>
                    <ul class="unstyled">
                        <li>{{ $regional->local }}</li>
                        <li>{{ $regional->data }}</li>
                        <li>{{ $regional->classificacao }}</li>
                        @if(!empty($regional->premios))
                            <li>{{ $regional->premios }}</li>
                        @endif
                    </ul>

                    @if(!$loop->last)
                        <hr>
                    @endif
                @endforeach
            </div>
        </div>
    @endif
    @if(isset($fotos[0]))
        <div class="jumbotron">
            <h1 style="font-weight: bold; text-align:center;">
                Fotos
            </h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-center">
                @foreach ($fotos as $foto)
                    @if($loop->index%3 == 0)
                        <div class="col" style="margin: 2rem 0;">
                            <img style="width:100%" src="{{ url('storage/'.$foto->caminho) }}" alt="Foto da temporada">
                        </div>
                    @elseif($loop->index%3 == 1)
                        <div class="col" style="margin: 2rem 0;">
                            <img style="width:100%" src="{{ url('storage/'.$foto->caminho) }}" alt="Foto da temporada">
                        </div>
                    @else
                        <div class="col" style="margin: 2rem 0;">
                            <img style="width:100%" src="{{ url('storage/'.$foto->caminho) }}" alt="Foto da temporada">
                        </div>
                        @endif
                @endforeach
            </div>
        </div>
    @endif
@endsection
