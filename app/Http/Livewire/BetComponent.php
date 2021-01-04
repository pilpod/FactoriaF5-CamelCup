<?php

namespace App\Http\Livewire;

use App\Models\Player;
use App\Models\Bet;
use Livewire\Component;

class BetComponent extends Component
{
    public $playerId, $animal, $bet;
    public $pot = 0;

    public function render()
    {   
        $players = Player::all();
        $bets = Bet::all();
        return view('livewire.bet-component', [
            'players' => $players,
            'bets' => $bets,
        ]);
    }

    public function store()
    {
        $this->validate(['playerId' => 'required', 'animal' => 'required', 'bet' => 'required']);
        
        Bet::create([
            'animal' => $this->animal,
            'bet' => $this->bet,
            'player_id' => $this->playerId,
        ]);

        $this->AddInPot();

    }

    public function destroy($id)
    {
        $bet = Bet::find($id);
        $bet->destroy($id);
        $this->SubstractInPot($bet);
    }

    public function win()
    {
        dd('you win');
    }

    public function AddInPot()
    {
        $this->pot += $this->bet;
    }

    public function SubstractInPot(Bet $bet)
    {
        $amount = $bet->bet;
        $this->pot -= $amount;
    }
}
