<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SkillTest extends TestCase
{
    /** @test */
    public function it_skill_calls()
    {
        $response = $this->get('/skill');

        $response->assertStatus(200);
    }
}
