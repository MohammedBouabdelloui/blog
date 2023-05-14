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
         'password' => bcrypt('Simo@2022'),
         'role' => 'Admin',
        ]);

        author::Create([
            'name' => fake()->name(), 
            'email' => fake()->unique()->email(),
            'password' => bcrypt('Simo@2023'),
           ]);

        author::Create([
        'name' => fake()->name(), 
        'email' => fake()->unique()->email(),
        'password' => bcrypt('Simo@2024'),
        ]);
    }
}
