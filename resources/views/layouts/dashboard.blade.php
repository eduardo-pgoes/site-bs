@extends('layouts.app')

@section('layout')

    <div class="jumbotron">
        <div class="row">
        <div class="col" style="text-align:center;">
                <a  style="font-size:2rem; color:black; text-decoration:none;"
                    href="{{ url('/') }}">
                        Voltar ao Site
                </a>
            </div>
            <div class="col" style="text-align:center;">
                <a  style="font-size:2rem; color:black; text-decoration:none;" 
                    href="{{ url('dashboard/historia') }}">
                        História
                </a>            
            </div>
            <div class="col" style="text-align:center;">
                <a  style="font-size:2rem; color:black; text-decoration:none;"
                    href="{{ url('dashboard/blog') }}">
                        Blog
                </a>
            </div>
            <div class="col" style="text-align:center;">
                <a  style="font-size:2rem; color:black; text-decoration:none;" 
                    href="{{ url('dashboard/apoio') }}">
                        Apoiadores
                </a>            
            </div>
        </div>
    </div>
    @if(!empty($errors->all()))
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#Erros").modal('show');
            });
        </script>

        <div class="modal fade" id="Erros" role="dialog" aria-labelledby="ErrosLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ErrosLabel">Houveram erros no formulário</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
    
    @yield('content')
    
@endsection
