@extends('layouts.layout')

@section('content')

    <div class="container">
        <div class="mt-4">
            <div class="row">
                <div class="d-flex justify-content-center m-3">
                    <h2>Add Players</h2>
                </div>
            </div>

            <div class="d-flex justify-content-center border border-primary p-3">
                <form action="" method="post">
                @csrf
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Player name" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Wallet" aria-label="Last name">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">+ add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @livewire('hello-world')

    </div>

    
@endsection