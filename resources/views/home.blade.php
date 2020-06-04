@extends('layouts.app')

@section('content')
    <x-front-banner title="FRC 6404" content="Um time que copia o FRC5800!"
     bg_style="background-image: linear-gradient(180deg, rgba(30,56,35,0.8) 23%, 
     rgba(50,91,57,0.8) 100%),
    url('{{ asset('assets/homebanner.jpg')}}');"/>
    <x-identidade/>
    <x-front-embed/>
    <x-front-carousel/>
@endsection