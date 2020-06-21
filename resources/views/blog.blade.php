@extends('layouts.basic')

@section('content')
    <x-front-banner style="background-image: linear-gradient(180deg, rgba(30,56,35,0.8) 23%, 
        rgba(50,91,57,0.8) 100%), url('{{ asset('assets/homebanner.jpg')}}');">    
        <x-slot name="titulo"> Blog</x-slot> 
        Conheça um pouco mais sobre o nosso time!
    </x-front-banner>
        
    <div class="jumbotron" style="padding-top: 0.5rem;">
        <div class="container-fluid">
        @foreach ($posts as $post)
            @if($loop->index%3 == 0)
                <div class="row align-items-center top-buffer">
                    <div class="col-4 d-flex">
                    <div class="card shadow-sm w-75 flex-fill" style="width: 18rem;">
                    <img class="card-img-top" src="{{ URL::asset('storage/'.$post->post_foto) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{$post->titulo}}</h5>
                            <p class="card-text">{{$post->resenha}}</p>
                            <a href="/blog/{{ $post->url}}" class="btn btn-primary stretched-link btn-success">Veja o post!</a>
                        </div>
                    </div>
                    </div>
            @elseif($loop->index%3 == 1)
                <div class="col-4 d-flex">
                    <div class="card shadow-sm w-75 flex-fill" style="width: 18rem;">
                    <img class="card-img-top" src="{{ URL::asset('storage/'.$post->post_foto) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{$post->titulo}}</h5>
                                <p class="card-text">{{$post->resenha}}</p>
                                <a href="/blog/{{ $post->url}}" class="btn btn-primary stretched-link btn-success">Veja o post!</a>
                            </div>
                    </div>
                </div>
            @else
                <div class="col-4 d-flex">
                    <div class="card shadow-sm w-75 flex-fill" style="width: 18rem;">
                    <img class="card-img-top" src="{{ URL::asset('storage/'.$post->post_foto) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{$post->titulo}}</h5>
                            <p class="card-text">{{$post->resenha}}</p>
                            <a href="/blog/{{ $post->url}}" class="btn btn-primary stretched-link btn-success">Veja o post!</a>
                        </div>
                    </div>
                </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
@endsection