@extends('layouts.app')

@section('layout')

    <x-navbar anos/>
        <div>
            @yield('content')
        </div>
    <x-footer/>

@endsection
