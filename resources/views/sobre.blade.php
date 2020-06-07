@extends('layouts.app')

@section('content')
    <x-front-banner title="Sobre nós" 
    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Nunc varius nec metus non scelerisque. " 
     bg_style="background-image: linear-gradient(180deg, rgba(30,56,35,0.8) 23%, 
     rgba(50,91,57,0.8) 100%),
    url('{{ asset('assets/homebanner.jpg')}}');"/>
    <div style="margin-top: 2rem">
        <x-right-media-panel title="Nossa equipe" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Nunc varius nec metus non scelerisque. " 
        image="homebanner.jpg"/>
    </div>
    <div style="margin-top: 2rem">
        <x-contagem-premios/>
    </div>
    <div style="margin-top: 2rem">        
            <x-left-media-panel title="Nossa missão" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Nunc varius nec metus non scelerisque. " 
            image="homebanner.jpg"/>
    </div>
    <div class="jumbotron" style="margin-top: 3rem; margin-bottom: 3rem; background-color: #E5E5E5;">
        <x-right-media-panel title="Nossa visão" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Nunc varius nec metus non scelerisque. " 
        image="homebanner.jpg"/>
    </div>
    <div style="margin-top: 2rem">        
        <x-left-media-panel title="Nossa valores" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Nunc varius nec metus non scelerisque. " 
            image="homebanner.jpg"/>
    </div>
    <div style="margin-top: 2rem">
        <x-identidade-areas/>
    </div>
    <div>
        <x-premios/>
    </div>
@endsection