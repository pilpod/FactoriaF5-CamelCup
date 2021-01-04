<div class="mt-4 mb-4">
    <div class="row">
        <div class="d-flex">
            <div id="bets" class="p-4 border border-primary">
                
                <div class="d-flex">
                    <select class="form-select" wire:model="playerId" id="player" required>
                        <option hidden selected>Player</option>
                        @foreach ($players as $player)
                            <option value="{{$player->id}}">{{$player->name}}</option>
                        @endforeach
                    </select>
                    <select class="form-select ms-2" wire:model="animal" id="animal" required>
                        <option hidden selected>Runner</option>
                        <option value="zebra">Marty</option>
                        <option value="lion">Simba</option>
                        <option value="turtle">Squirt</option>
                        <option value="bambi">Bambi</option>
                        <option value="horse">Perdigon</option>
                        <option value="camel">Joe Camel</option>
                    </select>
                    <select class="form-select ms-2" wire:model="bet" id="bet" required>
                        <option hidden selected>Amount</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                    <button class="btn btn-primary ms-2" wire:click="store">New bet</button>
                </div>
                

                <table class="table mt-4">
                    <thead>
                        <th scope="col">Player</th>
                        <th scope="col">Animal</th>
                        <th scope="col">Bet</th>
                        <th scope="col">Options</th>
                    </thead>
                    <tbody>
                        @foreach ($bets as $bet)
                            <tr>
                                <td>{{$bet->player->name}}</td>
                                <td>{{$bet->animal}}</td>
                                <td>{{$bet->bet}}</td>
                                <td>
                                    <button class="btn btn-danger" wire:click="destroy({{$bet->id}})">Trash</button>
                                    <button class="btn btn-success" wire:click="win">Winner</button>
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
