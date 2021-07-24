<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticlesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'category' => $this->faker->text(50),
            'description' => $this->faker->text(500),
            'author' => $this->faker->name,
            'views' => $this->faker->numberBetween(1, 1000000)
        ];
    }
}
