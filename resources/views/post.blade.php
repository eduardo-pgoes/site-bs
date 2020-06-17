@extends('layouts.app')

@section('content')
    <x-front-banner title="{{{$post->titulo}}}" content=""
     bg_style="background-image: linear-gradient(180deg, rgba(30,56,35,0.8) 23%, 
     rgba(50,91,57,0.8) 100%),
    url('{{ asset('assets/'.$post->post_foto)}}');"/>
    <div class="jumbotron">
        <div class="container-fluid">
        {!! $post->conteudo !!}
        </div>
    </div>
@endsection