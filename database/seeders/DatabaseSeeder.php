<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Movie::factory(5)->create();

        \App\Models\Quote::factory(5)->create([
            'movie_id' => \App\Models\Movie::all()->random()->id,
        ]);
    }
}
