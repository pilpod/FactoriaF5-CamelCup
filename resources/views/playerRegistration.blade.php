@extends('layouts.layout')

@section('content')

    <div class="container">
        <div class="mt-4 mb-4">
                @livewire('player-component')
        </div>

        <div class="d-flex justify-content-center">
            <a class="btn btn-success" href="{{ route('race') }}">Go to the race!</a>
        </div>
    </div>

    
@endsection