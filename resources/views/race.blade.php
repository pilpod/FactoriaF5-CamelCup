@extends('layouts.layout')

@section('content')

    <div class="container">
        <div class="row mt-4">
            <div class="d-flex justify-content-between">
                <h1>The Race</h1>
            </div>
        </div>

        <div id="race" class="row mt-4">
            <img id="scene" src="{{ asset('img/pistaConMeta.png') }}" alt="">
            <img id="camel" src="{{ asset('img/camel.png') }}">   
            <img id="horse" src="{{ asset('img/horse.png') }}"> 
            <img id="bambi" src="{{ asset('img/bambi.png') }}"> 
            <img id="turtle" src="{{ asset('img/turtle.png') }}"> 
            <img id="lion" src="{{ asset('img/lion.png') }}"> 
            <img id="zebra" src="{{ asset('img/zebra.png') }}"> 
        </div>

        <div class="row mt-4">
            <div class="d-flex">
                <span id="winner">The Winner is ...</span>
            </div>
        </div>

        <div class="row">
            <div class="d-flex justify-content-end">
                <button class="btn btn-success me-4" onclick="Execute()">Start</button>
                <button class="btn btn-danger" onclick="ResetPos()">Reset</button>
            </div>
        </div>
    </div>

    <audio id="shootGun" src="{{ asset('audio/rifle-gun-shoot.wav') }}"></audio>
    <audio id="loneRanger" src="{{ asset('audio/lone-ranger-recorte.mp3') }}"></audio>
    <audio id="applause" src="{{ asset('audio/applause.mp3') }}"></audio>

    <script src="{{ asset('js/race.js') }}"></script>

    
@endsection