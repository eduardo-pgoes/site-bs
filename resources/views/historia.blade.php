@extends('layouts.app')

@section('content')

    <x-front-banner 
        :title="$temporada->nome" 
        content=""
        bg_style="background-image: linear-gradient(180deg, rgba(30,56,35,0.8) 23%, rgba(50,91,57,0.8) 100%),
        url('{{ asset('assets/homebanner.jpg')}}');"/>

        <div style="margin: 2rem 0">
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
        <h2>
            O Robô
        </h2>
        <div class='row'>
            <div class='col-sm-6'>
                <img style="width:100%" src="{{ URL::asset('storage/'.$temporada->robo_foto) }}" alt="Foto de exibição do Robô">
            </div>
            <div class='col-sm-6'>
                <h5>
                    {{ $temporada->robo_desc }}
                </h5>
            </div>
        </div>  
    </div>
     
    @if(isset($regionais[0]))  
        <div style="margin: 2rem 0">
            <div class="container">         
                    <h2>
                        Competições
                    </h2>
                @foreach($regionais as $regional)
                    <h5>
                        {{ $regional->nome }}
                    </h5>
                    <ul class="unstyled">
                        <li>{{ $regional->local }}</li>
                        <li>{{ $regional->data }}</li>
                        <li>{{ $regional->classificacao }}</li>
                        @empty($regional->premios)
                            <li>{{ $regional->premios }}</li>
                        @endempty
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
            <h2>
                Fotos
            </h2>
            @foreach ($fotos as $foto)
                @if($loop->index%3 == 0)
                <div class="row justify-content-center">
                    <div class="col-4">
                        <img style="width:100%" src="{{ url('storage/'.$foto->caminho) }}" alt="Foto da temporada">
                    </div>
                @elseif($loop->index%3 == 1)
                    <div class="col-4">
                        <img style="width:100%" src="{{ url('storage/'.$foto->caminho) }}" alt="Foto da temporada">
                    </div>
                @else
                    <div class="col-4">
                        <img style="width:100%" src="{{ url('storage/'.$foto->caminho) }}" alt="Foto da temporada">
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    @endif
@endsection
