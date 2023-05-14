<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         
            'title' => fake()->unique()->title(),
            'description' => fake()->text(),
            'img_path_1' => 'post-1.jpg' , 
            'img_path_2' => 'post-2.jpg' , 
            'img_path_3' => 'post-3.jpg' ,
            'categorie_id' => 1, 
            'author_id' => 1 , 
            'validation_post' => 1 ,
        ];
    }
}
