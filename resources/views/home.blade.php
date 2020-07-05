@extends('layouts.basic')

@section('content')
    <x-front-banner style="background-image: linear-gradient(180deg, rgba(30,56,35,0.8) 23%, 
        rgba(50,91,57,0.8) 100%), url('{{ asset('assets/Banners/Home.jpg')}}');">    
    
        <x-slot name="titulo"> FRC 6404 </x-slot> 
        Transformando vidas e conquistando sonhos através da educação.
    </x-front-banner>

    <x-identidade/>
    <x-front-embed/>
    <x-front-carousel/>
@endsection