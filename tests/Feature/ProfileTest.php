<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    /** @test */
    public function it_profile_calls()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
