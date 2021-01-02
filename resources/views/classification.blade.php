@extends('layouts.layout')

@section('content')

    <div class="container">
        
        <div class="row mt-4 mb-4">
            <div class="d-flex justify-content-center m-3">
                <h2>Classification</h2>
            </div>
        </div>
        

        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pos</th>
                        <th>Name</th>
                        <th>Wallet</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $pos = 1;
                    @endphp

                    @foreach ($players as $player)
                        <tr>
                            <td>{{ $pos++ }}</td>
                            <td>{{$player->name}}</td>
                            <td>{{$player->wallet}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    
@endsection