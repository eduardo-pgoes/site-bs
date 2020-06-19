@extends('layouts.app')

@section('content')
    <x-front-banner title="Sobre nós" 
        content="Conheça um pouco mais do nosso trabalho" 
        bg_style="background-image: linear-gradient(180deg, rgba(30,56,35,0.8) 23%, 
        rgba(50,91,57,0.8) 100%),
        url('{{ asset('assets/homebanner.jpg')}}');"/>

    <div style="margin-top: 2rem">
        <x-right-media-panel title="Nossa equipe" content="O Brazilian Storm é um time de robótica sediado na Escola Estadual Prof Alceu Maynard Araújo, uma escola pública de São José dos Campos. 
            Iniciamos nossas atividades em 2016, com a assistência de outra equipe da cidade, a ETEP team #1382, e total suporte da nossa escola. 
            Além de participarmos da FRC, desenvolvemos projetos para incentivar o contato de jovens estudantes com a tecnologia, realizamos trabalhos voluntários e divulgamos a equipe e a FIRST na região.
            Nossa equipe é composta por alunos majoritariamente de escolas públicas, mentores voluntários, pais e patrocinadores." 
        image="homebanner.jpg"/>
    </div>
    <div style="margin-top: 2rem">
        <x-contagem-premios/>
    </div>
    <div style="margin-top: 2rem">        
            <x-left-media-panel title="Nossa missão" content="Inspirar e contribuir no desenvolvimento de alunos, principalmente de escolas públicas, através da STEM (Ciência, Tecnologia, Engenharia e Matemática), promovendo sua capacitação e aprimoramento pessoal e profissional, com o apoio de nossos mentores, ex-alunos, patrocinadores e comunidade." 
            image="homebanner.jpg"/>
    </div>
    <div class="jumbotron" style="margin-top: 3rem; margin-bottom: 3rem; background-color: #E5E5E5;">
        <x-right-media-panel title="Nossa visão" content="Transformar a vida dos jovens, dando lhes oportunidades e abrindo portas." 
        image="homebanner.jpg"/>
    </div>
    <div style="margin-top: 2rem">        
        <x-left-media-panel title="Nossos valores" content="Respeito pelo outro, comunicação aberta e ética como linha de base, pautados nos valores fundamentais da FIRST." 
            image="homebanner.jpg"/>
    </div>
    <div style="margin-top: 2rem">
        <x-identidade-areas/>
    </div>
    <div>
        <x-premios/>
    </div>
@endsection