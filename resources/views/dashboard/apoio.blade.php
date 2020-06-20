@extends('layouts.dashboard')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-2" style="max-height:300px; overflow-y:scroll;">
                <div data-spy="scroll" data-offset="0">
                    <h4> <a href="{{ url('dashboard/apoio') }}"> Novo </a></h4>
                    @foreach($apoiadores as $apoiador)
                    <h4> 
                        <a href="{{ url('dashboard/apoio/'.$apoiador->id) }}">
                            {{$apoiador->nome}}
                        </a>
                    </h4>
                    @endforeach
                </div>
            </div>
            <div class="col">
                <div class="container">
                    <h3>Post</h3>
                    @if(empty($apoiadorAtual ?? ''))
                        <form action="apoio/apoiador" enctype="multipart/form-data" method="post">                    
                    @else
                        <form action="apoiador/{{$apoiadorAtual->id ?? ''}}" enctype="multipart/form-data" method="post">                    
                        @method('PUT')
                    @endif
                        @csrf
                        <div class="row">
                            <div class="col">
                                <p>Nome</p>
                                <div class="input-group">
                                    <input name="nome" value="{{$apoiadorAtual->nome ?? ''}}" type="text">
                                </div>
                            </div>
                            <div class="col">
                                <p>Logo</p>
                                <div class="input-group">
                                    <input name="logo" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <p>Sobre</p>
                                <div class="input-group">
                                    <input name="sobre" value="{{$apoiadorAtual->sobre ?? ''}}" type="text">
                                </div>
                            </div>
                        </div>
                    @if(empty($apoiadorAtual ?? ''))
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
                                <form action="apoiador/{{$apoiadorAtual->id ?? ''}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit"> Excluir</button>
                                </form>
                            </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection