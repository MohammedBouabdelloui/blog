<?php

namespace Database\Factories;

use App\Models\author;
use App\Models\category;
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
            'category_id' => category::all()->random()->id, 
            'author_id' => author::all()->random()->id , 
            'validation_post' => rand(0,1) ,
        ];
    }
}
