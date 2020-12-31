@extends('layouts.layout')

@section('content')

    <div class="container">
        <div class="row mt-4">
            <div class="d-flex justify-content-center">
                <h1>Time to run!!!</h1>
            </div>
        </div>

        <div id="race" class="row mt-4 border border-success">
            <img id="camel" src="{{ asset('img/camel.png') }}">   
            <img id="horse" src="{{ asset('img/horse.png') }}"> 
            <img id="bambi" src="{{ asset('img/bambi.png') }}"> 
            <img id="turtle" src="{{ asset('img/turtle.png') }}"> 
            <img id="lion" src="{{ asset('img/lion.png') }}"> 
            <img id="zebra" src="{{ asset('img/zebra.png') }}"> 
        </div>

        <div class="row mt-4">
            <div class="d-flex justify-content-end">
                <button class="btn btn-success" onclick="execute()">Start</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/Concurrent.Thread.Compiler.js') }}"></script>
    <script src="{{ asset('js/race.js') }}"></script>

    
@endsection