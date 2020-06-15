@extends('layouts.app')

@section('content')

    <x-front-banner 
        title="DashBoard" 
        content="Controle e configuração do Site"
        bg_style="background-image: linear-gradient(180deg, rgba(30,56,35,0.8) 23%,rgba(50,91,57,0.8) 100%),
        url('{{ asset('assets/homebanner.jpg')}}');"/>
        
    <div class="jumbotron">
        <div class="row">
            <div class="col" style="text-align:center;">
                <a  style="font-size:2rem; color:black; text-decoration:none;"
                    href="{{ url('dashboard/blog') }}">
                        Blog
                </a>
            </div>
            <div class="col" style="text-align:center;">
                <a  style="font-size:2rem; color:black; text-decoration:none;" 
                    href="{{ url('dashboard/historia') }}">
                        História
                </a>            
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2" style="height:300px; overflow-y:scroll;">
                <div data-spy="scroll" data-offset="0">
                    <h4> Novo </h4>
                    <h4> 2020 </h4>
                    <h4> 2019 </h4>
                    <h4> 2018 </h4>
                    <h4> 2017 </h4>
                </div>
            </div>
            <div class="col">
                <div class="container">
                    <h3>Temporada</h3>
                    <form action="/Temporada" method="post">
                        <div class="row">
                            <div class="col">
                                <p>Nome:</p>
                                <div class="input-group">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col">
                                <p>Url do kickoff</p>
                                <div class="input-group">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Ano</p>
                                <div class="input-group">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col">
                                <p>Foto do Robô</p>
                                <div class="input-group">
                                    <input type="file">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Descrição da temporada</p>
                                <div class="input-group">
                                    <textarea name="" id="" cols="30"></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <p>Descrição do Robô</p>
                                <div class="input-group">
                                    <textarea name="" id="" cols="30"></textarea>
                                </div>
                            </div>
                        </div>  
                    </form>    

                    <hr>
                    <h3>Regional</h3>
                    <form action="/Regional" method="post">
                        <div class="row justify-content-start">
                            <div class="col-2">Nome</div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input id="" name="" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-2">Local</div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input id="" name="" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-2">Data</div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input id="" name="" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-2">Classificação</div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input id="" name="" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-2">Prêmios</div>
                            <div class="col-3">
                                <div class="input-group">
                                    <input id="" name="" type="text">
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <h3>Fotos</h3>
                    <div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" >
                            <label class="custom-file-label" for="inputGroupFile01">Nova Foto</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection