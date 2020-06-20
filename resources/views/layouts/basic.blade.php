@extends('layouts.app')

@section('layout')

    <x-navbar/>
        <div style="margin-top:60px">
            @yield('content')
        </div>
    <x-footer/>

@endsection
