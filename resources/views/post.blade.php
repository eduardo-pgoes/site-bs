@extends('layouts.basic')

@section('content')

    <x-front-banner style="background-image: linear-gradient(180deg, rgba(30,56,35,0.8) 23%, 
        rgba(50,91,57,0.8) 100%), url('{{ asset('assets/homebanner.jpg')}}');">        
        <x-slot name="titulo"> {{$post->titulo}}</x-slot> 
    </x-front-banner>

    
    <div class="jumbotron">
        <div class="container-fluid">
        {!! $post->conteudo !!}
        </div>
    </div>
@endsection