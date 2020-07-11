@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-2" style="max-height:300px; overflow-y:scroll;">
                <div data-spy="scroll" data-offset="0">
                    <h4> <a href="{{ url('dashboard/historia') }}"> Novo </a></h4>
                    @foreach($anos as $ano)
                    <h4> 
                        <a href="{{ url('dashboard/historia/'.$ano) }}">
                            {{$ano}}
                        </a>
                    </h4>
                    @endforeach
                </div>
            </div>
            <div class="col">
                <div class="container">
                    <h3>Temporada</h3>
                    @if(empty($temporadaAtual ?? ''))
                        <form action="historia/temporada" enctype="multipart/form-data" method="post">                    
                    @else
                        <form action="temporada/{{$temporadaAtual->id ?? ''}}" enctype="multipart/form-data" method="post">                    
                        @method('PUT')
                    @endif
                        @csrf
                        <div class="row">
                            <div class="col">
                                <p>Nome:</p>
                                <div class="input-group">
                                    <input required name="nome" value="{{$temporadaAtual->nome ?? ''}}" type="text">
                                </div>
                            </div>
                            <div class="col">
                                <p>Foto do Robô</p>
                                <div class="input-group">
                                    <input name="robo_foto" type="file">
                                </div>
                            </div>
                            <div class="col">
                                <p>Banner</p>
                                <div class="input-group">
                                    <input name="banner" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Ano</p>
                                <div class="input-group">
                                    <input required min="1980" max="2200" name="ano" value="{{$temporadaAtual->ano ?? ''}}" type="number">
                                </div>
                            </div>
                            <div class="col">
                                <p>Url do kickoff</p>
                                <div class="input-group">
                                    <input required name="video_url" value="{{$temporadaAtual->video_url ?? ''}}" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Descrição da temporada</p>
                                <div class="input-group">
                                    <textarea required name="descricao" cols="30"> {{$temporadaAtual->descricao ?? ''}} </textarea>
                                </div>
                            </div>
                            <div class="col">
                                <p>Descrição do Robô</p>
                                <div class="input-group">
                                    <textarea required name="robo_desc" cols="30"> {{$temporadaAtual->robo_desc ?? ''}} </textarea>
                                </div>
                            </div>
                        </div> 
                    @if(empty($temporadaAtual ?? ''))
                            <div class="row justify-content-center">
                                <button class="btn btn-success" type="submit"> Cadastrar</button>
                            </div>
                        </form>
                    @else
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <button class="btn  btn-info" type="submit"> Alterar</button>
                                </div>
                        </form>                    
                            <div class="col-3">
                                <form action="temporada/{{$temporadaAtual->id ?? ''}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit"> Excluir</button>
                                </form>
                            </div>
                    </div>
                    @endif
                    

                    @if(!empty($temporadaAtual))
                        <hr>
                        <h3>Regional</h3>
                        @foreach($regionais as $regional)
                            <form action="regional/{{$regional->id}}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="row justify-content-start">
                                    <div class="col-2">Nome</div>
                                    <div class="col-3">
                                        <div class="input-group">
                                            <input required name="nome" value="{{$regional->nome}}" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-2">Local</div>
                                    <div class="col-3">
                                        <div class="input-group">
                                            <input required name="local" value="{{$regional->local}}" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-2">Data</div>
                                    <div class="col-3">
                                        <div class="input-group">
                                            <input required name="data" value="{{$regional->data}}" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-2">Classificação</div>
                                    <div class="col-3">
                                        <div class="input-group">
                                            <input required name="classificacao" value="{{$regional->classificacao}}" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-2">Prêmios</div>
                                    <div class="col-3">
                                        <div class="input-group">
                                            <input name="premios" value="{{$regional->premios}}" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-3">
                                        <button class="btn btn-info">
                                            Alterar
                                        </button>
                                    </div>
                            </form>
                                    <div class="col-3">
                                        <form action="regional/{{$regional->id}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">
                                                Remover 
                                            </button>
                                        </form>
                                    </div>
                                </div>
                        @endforeach

                        <form action="regional/" method="post">
                            @csrf
                            <input type="hidden" name="temporada_id" value="{{ $temporadaAtual->id }}">
                            
                            <div class="row justify-content-start">
                                <div class="col-2">Nome</div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <input required name="nome" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-2">Local</div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <input required name="local" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-2">Data</div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <input required name="data" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-2">Classificação</div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <input required name="classificacao" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-2">Prêmios</div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <input name="premios" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <button class="btn btn-success">
                                    Cadastrar
                                </button>
                            </div>
                        </form>
                    @endif


                    @if(!empty($temporadaAtual))
                        <hr>
                        <h3>Fotos</h3>
                        <div class="container">
                            @foreach($fotos as $foto)

                                @if($loop->odd)
                                    <div class="row justify-content-around">
                                        <div class="col-5">
                                            <img style="width:100%" src="{{url('storage/'.$foto->caminho)}}" 
                                                alt="foto da temporada">
                                            <form action="foto/{{$foto->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">
                                                    Remover
                                                </button>                                                
                                            </form>
                                        </div>
                                    @if($loop->last)
                                    </div>
                                    @endif
                                @else
                                        <div class="col-5">
                                            <img style="width:100%" src="{{url('storage/'.$foto->caminho)}}"
                                                alt="foto da temporada">
                                            <form action="foto/{{$foto->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">
                                                    Remover
                                                </button>                                                
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            @endforeach 


                            <form action="foto" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="temporada_id" value="{{ $temporadaAtual->id }}">

                                <div class="row justify-content-center">
                                    <div class="col-3">
                                        <div class="input-group">
                                            <input required multiple name="fotos[]" type="file">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <button class="btn btn-success">
                                            Adicionar
                                        </button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
