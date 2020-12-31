<?php

namespace Tests\Feature;

use App\Http\Livewire\PlayerComponent;
use App\Models\Player;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Pluralizer;
use Livewire\Livewire;
use Tests\TestCase;

class PlayerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_players_page_contain_livewire_component()
    {
        $this->get('/players')->assertSeeLivewire('player-component');
    }

    public function test_name_is_required()
    {
        Livewire::test(PlayerComponent::class, ['name', ''])
            ->set('name', '')
            ->call('store')
            ->assertHasErrors(['name' => 'required']);
    }

    public function test_wallet_is_required()
    {
        Livewire::test(PlayerComponent::class, ['wallet', ''])
            ->set('wallet', '')
            ->call('store')
            ->assertHasErrors(['wallet' => 'required']);
    }
    
    public function test_can_add_a_player()
    {

        Livewire::test(PlayerComponent::class, ['name', 'wallet'])
            ->set('name', 'pepe')
            ->set('wallet', 100)
            ->call('store');

        $this->assertTrue(Player::where('name', 'pepe')->exists());
    }

    
}
