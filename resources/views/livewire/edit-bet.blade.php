<div class="d-flex">
    <select class="form-select" wire:model="playerId" id="player" required>
        <option value="{{$player->id}}">{{$player->name}}, wallet: {{$player->wallet}}</option>
        @foreach ($players as $player)
            <option value="{{$player->id}}">{{$player->name}}, wallet: {{$player->wallet}}</option>
        @endforeach
    </select>
    <select class="form-select ms-2" wire:model="animal" id="animal" required>
        <option value="">{{}}</option>
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
    <button class="btn btn-primary ms-2" wire:click="update">Update</button>
    <button class="btn btn-primary ms-2" type="reset">Reset</button>
</div>