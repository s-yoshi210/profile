<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ActualResultTest extends TestCase
{
    /** @test */
    public function it_actual_result_calls()
    {
        $response = $this->get('/actual_results');

        $response->assertStatus(200);
    }
}
