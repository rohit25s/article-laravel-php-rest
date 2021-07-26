<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;
use App\Models\Article;
use App\Models\Author;

class ExampleTest extends TestCase
{
    private $articles;

    use RefreshDatabase;

    public function setUp (): void
    {
        parent::setUp();
        $this->articles = Article::factory()->times(10)->create();
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $articles = $this->article::all();
        $isIdNull = false;
        foreach ($articles as $article) {
            if (!is_null($article->id)) {
                $isIdNull = true;
                break;
            }
        }
        $this->assertTrue(!$isIdNull);
    }
}
