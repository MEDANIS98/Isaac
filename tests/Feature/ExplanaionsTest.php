<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExplanaionsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_explanations_title_is_plural()
    {
        $response = $this->get('/explanations/80%20%20%20%20%20%20%20%20%20%20%20%20class=');

        $response->assertSee('explanations');

        $response->assertStatus(200);
    }
}
