<div class="mt-4 mb-4">
    <div class="row">
        <div class="d-flex">
            <div id="bets" class="p-4 border border-primary">
                
                @include('livewire.bet-form')
                
                <table class="table mt-4">
                    <thead>
                        <th scope="col">Player</th>
                        <th scope="col">Wallet</th>
                        <th scope="col">Animal</th>
                        <th scope="col">Bet</th>
                        <th scope="col">Options</th>
                    </thead>
                    <tbody>
                        @foreach ($bets as $bet)
                            <tr>
                                <td>{{$bet->player->name}}</td>
                                <td>{{$bet->player->wallet}}</td>
                                <td>{{$bet->animal}}</td>
                                <td>{{$bet->bet}}</td>
                                <td>
                                    <button class="btn btn-danger" wire:click="destroy({{$bet->id}})">Trash</button>
                                    <button class="btn btn-success" wire:click="win({{$bet->player_id}})">Winner</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div id="pot" class="col-3 ms-4 border border-primary">
                <div class="text-center">
                    <h2>Pot</h2>
                    <span id="potNumber" x-data>
                        <strong x-text="$wire.pot"></strong>
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>
