<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Player;

class PlayerComponent extends Component
{
    public $name, $wallet;

    public function render()
    {
        $players = Player::all();
        return view('livewire.show-players', [
            'players' => $players,
        ]);
    }

    public function store()
    {
        $this->validate(['name' => 'required', 'wallet' => 'required']);

        Player::create([
            'name' => $this->name,
            'wallet' => $this->wallet,
        ]);
    }

    public function destroy($id)
    {
        Player::destroy($id);
    }
}
