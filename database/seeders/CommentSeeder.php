<?php

namespace Database\Seeders;
use App\Models\post;
use App\Models\comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0 ; $i < 20 ; $i++){
            comment::Create([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'post_id' => post::all()->random()->id,
                'comment' => fake()->text()
            ]);
        }
    }
}
