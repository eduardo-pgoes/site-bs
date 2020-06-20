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
                    href="{{ url('dashboard/Apoio') }}">
                        Apoiadores
                </a>            
            </div>
        </div>
    </div>

    @yield('content')
    
@endsection
