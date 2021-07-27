<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $authors = Author::all()->pluck('id')->toArray();
        return [
            'title' => $this->faker->word,
            'category' => $this->faker->text(50),
            'description' => $this->faker->text(500),
            'views' => $this->faker->numberBetween(1, 1000000),
            'author_id' => $this->faker->randomElement($authors),
        ];
    }
}
