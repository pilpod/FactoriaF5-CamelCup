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

        $player = Player::find($this->playerId);
        $this->SubstractInPlayerWallet($player);

    }

    public function destroy($id)
    {
        $bet = Bet::find($id);
        $bet->destroy($id);
        $this->SubstractInPot($bet);
    }

    public function win($player_id)
    {
        $player = Player::find($player_id);
        $player->wallet += $this->pot;
        $player->save();

        $this->pot = 0;

    }

    public function AddInPot()
    {
        $this->pot += $this->bet;
    }

    public function SubstractInPot(Bet $bet)
    {
        $amount = $bet->bet;
        if($this->pot > 0) {
            $this->pot -= $amount;
        }
    }

    public function SubstractInPlayerWallet(Player $player)
    {
        $player->wallet -= $this->bet;
        $player->save();
    }
}
