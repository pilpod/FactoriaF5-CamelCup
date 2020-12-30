<div>

    <div class="row">
        <div class="d-flex justify-content-center m-3">
            <h2>Add Players</h2>
        </div>
    </div>

    <div class="d-flex justify-content-center border border-primary p-3">
        
            <div class="row">
                <div class="col-6">
                    <input type="text" wire:model="name" id="name" class="form-control" placeholder="Player name" aria-label="name">
                    @error('name')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" wire:model="wallet" id="wallet" class="form-control" placeholder="Wallet" aria-label="wallet">
                    @error('wallet')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <button wire:click="store" class="btn btn-primary">+ add</button>
                </div>
            </div>

    </div>

    <div class="justify-content-center border border-primary p-3 mt-3">
        <h2>List of Players</h2>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Wallet</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>
                @php
                    $counter = 1;
                @endphp
                @foreach ($players as $player)
                    <tr>
                        <th scope="row">{{ $counter++ }}</th>
                        <td> {{ $player->name }}</td>
                        <td> {{ $player->wallet }}</td>
                        <td>
                            <button wire:click="destroy( {{ $player->id }} )" class="btn btn-danger">delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
