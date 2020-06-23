<?php

namespace Tests\Feature\Api;

use App\Models\Development;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DevelopmentTest extends TestCase
{
    use RefreshDatabase;

    protected $jsonStructureDevelopment = [
        'id',
        'title',
        'reason',
        'content',
        'development',
        'git_url',
        'demo',
        'created_at',
        'updated_at'
    ];

    /** @test */
    public function it_get_development()
    {
        factory(Development::class)->create();

        $response = $this->json('GET', '/api/development');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     '*' => $this->jsonStructureDevelopment
                 ]);
    }
}
