<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'content'=>$this->faker->text,
            'image'=>$this->faker->imageUrl,
            'likes'=>random_int(1, 1000),
            'category_id'=>Category::get()->random()->id,
        ];
    }
}
