<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'content' => $this->faker->word,
            'author' => rand(1, 20),
        ];
    }
}
