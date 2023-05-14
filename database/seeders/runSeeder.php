<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class runSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            //authorSeeder::class,
            //categorieSeeder::class,
           //$post = post::factory(20)->create()
           //PostSeeder::class,
           
        ]);
    }
}
