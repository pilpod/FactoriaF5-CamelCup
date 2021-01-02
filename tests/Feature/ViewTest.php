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
            ->assertSee('Add Players');
    }

    public function test_can_see_race_view()
    {
        $response = $this->get('/race');

        $response->assertStatus(200)
            ->assertSee('The Race');
    }

    public function test_can_go_to_classification_view()
    {
        $response = $this->get('/classification');

        $response->assertStatus(200)
            ->assertSee('Classification');
    }
}
