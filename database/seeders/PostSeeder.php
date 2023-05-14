<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // $posts = post::factory()->count(3);
       for($i = 1 ; $i < 20 ; $i++){

           post::Create([
               
               'title' => fake()->unique()->title(),
               'description' => fake()->text(),
               'img_path_1' => 'post-1.jpg' , 
               'img_path_2' => 'post-2.jpg' , 
               'img_path_3' => 'post-3.jpg' ,
               'categorie_id' => 1, 
               'author_id' => 1 , 
               'validation_post' => 0 ,
            ]);
            
        }
    }
}
