<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post; // You need to import the Post model for post_id
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => Post::factory(), // Associate the comment with a random post
            'reply' => $this->faker->paragraph(),
        ];
    }
}
