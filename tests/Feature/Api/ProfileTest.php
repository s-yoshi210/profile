<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Profile;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    protected $jsonStructureProfile = [
        'id',
        'content',
        'picture',
        'git_account',
        'git_url',
        'twitter_account',
        'twitter_url',
        'qiita_account',
        'qiita_url',
        'created_at',
        'updated_at'
    ];

    /** @test */
    public function it_get_profile_information()
    {
        // プロフィールデータ生成
        factory(Profile::class)->create();

        // API実行してプロフィールデータ取得
        $response = $this->json('GET', '/api/profile');

        $response->assertStatus(200)  // リクエストが成功していること
                 ->assertJsonStructure($this->jsonStructureProfile);

    }
}
