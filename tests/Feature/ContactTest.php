<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    /** @test */
    public function it_contact_calls()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
