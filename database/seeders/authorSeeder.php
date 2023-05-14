<?php

namespace Database\Seeders;

use App\Models\author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class authorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        author::Create([
         'name' => 'mohammed sime' , 
         'email' => 'simoboolz@gmail.com',
         'password' => 'Simo@2022',
         'rool' => 'Admin',
        ]);

        author::Create([
            'name' => fake()->name(), 
            'email' => fake()->unique()->email(),
            'password' => 'Simo@2022',
           ]);

        author::Create([
        'name' => fake()->name(), 
        'email' => fake()->unique()->email(),
        'password' => 'Simo@2022',
        ]);
    }
}
