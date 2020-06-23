<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DevelopmentTest extends TestCase
{
    /** @test */
    public function it_development_calls()
    {
        $response = $this->get('/development');

        $response->assertStatus(200);
    }
}
