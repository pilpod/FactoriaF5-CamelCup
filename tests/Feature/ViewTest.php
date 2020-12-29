<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_see_welcome_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_can_see_view_player_registration()
    {
        $response = $this->get('/players');

        $response->assertStatus(200)
            ->assertViewIs('playerRegistration')
            ->assertSee('Add Players');
    }
}
