<?php

namespace Tests\Feature\Api;

use App\Models\ActualResult;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ActualResultTest extends TestCase
{
    use RefreshDatabase;

    protected $jsonStructureActualResult = [
        'id',
        'title',
        'content',
        'job',
        'environment',
        'job_from',
        'job_to',
        'created_at',
        'updated_at'
    ];

    /** @test */
    public function it_get_actual_results()
    {
        factory(ActualResult::class)->create();

        $response = $this->json('GET', '/api/actual_result');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     '*' => $this->jsonStructureActualResult
                 ]);
    }
}
