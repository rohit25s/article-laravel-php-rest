<?php

namespace Tests\Feature;


use App\Models\User;
use App\Models\Author;
use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    private $user;

    public function setUp () :void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        Article::factory()->times(10)->create();
        Author::factory()->times(10)->create();
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function test_fluent_json()
    {
        $response = $this->actingAs($this->user)
            ->get('/article');
        $response->assertStatus(200);
    }
}
