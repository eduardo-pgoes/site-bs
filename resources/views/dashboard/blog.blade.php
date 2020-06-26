@extends('layouts.dashboard')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-2" style="max-height:300px; overflow-y:scroll;">
                <div data-spy="scroll" data-offset="0">
                    <h4> <a href="{{ url('dashboard/blog') }}"> Novo </a></h4>
                    @foreach($posts as $post)
                    <h4> 
                        <a href="{{ url('dashboard/blog/'.$post->url) }}">
                            {{$post->url}}
                        </a>
                    </h4>
                    @endforeach
                </div>
            </div>
            <div class="col">
                <div class="container">
                    <h3>Post</h3>
                    @if(empty($postAtual ?? ''))
                        <form action="blog/post" enctype="multipart/form-data" method="post">                    
                    @else
                        <form action="post/{{$postAtual->id ?? ''}}" enctype="multipart/form-data" method="post">                    
                        @method('PUT')
                    @endif
                        @csrf
                        <div class="row">
                            <div class="col">
                                <p>Titulo</p>
                                <div class="input-group">
                                    <input required name="titulo" value="{{$postAtual->titulo ?? ''}}" type="text">
                                </div>
                            </div>
                            <div class="col">
                                <p>Foto do Banner</p>
                                <div class="input-group">
                                    <input name="post_foto" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>URL</p>
                                <div class="input-group">
                                    <input required name="url" value="{{$postAtual->url ?? ''}}" type="text">
                                </div>
                            </div>
                            <div class="col">
                                <p>Conteúdo</p>
                                <div class="input-group">
                                    <textarea required name="conteudo" cols="30"> {{$postAtual->conteudo ?? ''}} </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <p>Resenha</p>
                                <div class="input-group">
                                    <input required name="resenha" value="{{$postAtual->resenha ?? ''}}" type="text">
                                </div>
                            </div>
                        </div>
                    @if(empty($postAtual ?? ''))
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
                                <form action="post/{{$postAtual->id ?? ''}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit"> Excluir</button>
                                </form>
                            </div>
                    </div>
                    @endif
                    
                    {{--
                    TODO verificar a necessidade de upload de fotos
                    @if(!empty($postAtual))
                        <hr>
                        <h3>Fotos</h3>
                        <div class="container">
                            @foreach($fotos as $foto)
                                @if($loop->odd)
                                    <div class="row justify-content-around">
                                        <div class="col-5">
                                            <img style="width:100%" src="{{url('storage/'.$foto->caminho)}}" 
                                                alt="foto da blog">
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
                                                alt="foto da blog">
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


                            <form action="foto/" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <input type="hidden" name="post_id" value="{{ $postAtual->id }}">

                                <div class="row justify-content-center">
                                    <div class="col-3">
                                        <div class="input-group">
                                            <input name="foto" type="file">
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
                    --}}

                </div>
            </div>
        </div>
    </div>
@endsection