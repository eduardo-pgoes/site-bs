@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        @foreach ($posts as $post)
            @if($loop->index%3 == 0)
                <div class="row align-items-center top-buffer">
                    <div class="col-4">
                    <div class="card shadow-sm w-75" style="width: 18rem;">
                    <img class="card-img-top" src="https://investtprime.com.br/application/modules/themes/views/default/assets/images/image-placeholder.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->titulo}}</h5>
                            <p class="card-text">{{$post->conteudo}}</p>
                        </div>
                    </div>
                    </div>
            @elseif($loop->index%3 == 1)
                <div class="col-4">
                    <div class="card shadow-sm w-75" style="width: 18rem;">
                    <img class="card-img-top" src="https://investtprime.com.br/application/modules/themes/views/default/assets/images/image-placeholder.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$post->titulo}}</h5>
                                <p class="card-text">{{$post->conteudo}}</p>
                            </div>
                    </div>
                </div>
            @else
                <div class="col-4">
                    <div class="card shadow-sm w-75" style="width: 18rem;">
                    <img class="card-img-top" src="https://investtprime.com.br/application/modules/themes/views/default/assets/images/image-placeholder.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->titulo}}</h5>
                            <p class="card-text">{{$post->conteudo}}</p>
                        </div>
                    </div>
                </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection