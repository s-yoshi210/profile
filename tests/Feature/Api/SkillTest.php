<?php

namespace Tests\Feature\Api;

use App\Models\Skill;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SkillTest extends TestCase
{
    use RefreshDatabase;

    protected $jsonStructureSkill = [
        'id',
        'categorie_id',
        'sort',
        'created_at',
        'updated_at',
        'comment',
        'color',
        'skills' => [
            'id',
            'categorie_id',
            'technology',
            'years',
            'created_at',
            'updated_at'
        ]
    ];

    /** @test */
    public function it_get_skills()
    {
        // スキル情報生成
        factory(Skill::class)->create();

        // APIを実行してスキル情報を取得
        $response = $this->json('GET', '/api/skill');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                    '*' => $this->jsonStructureSkill  // *は下層にあるものをnullableとして扱う。このキー自体のネストは無視する。
                 ]);
    }
}
