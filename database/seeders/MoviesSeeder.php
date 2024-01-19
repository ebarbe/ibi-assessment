<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create(['title' => 'Titanic']);
        Movie::create(['title' => 'Inception']);
        Movie::create(['title' => 'The Wolf of Wall Street']);
        Movie::create(['title' => 'Sophie\'s Choice']);
        Movie::create(['title' => 'The Devil Wears Prada']);
        Movie::create(['title' => 'Kramer vs. Kramer']);
        Movie::create(['title' => 'Training Day']);
        Movie::create(['title' => 'Fences']);
        Movie::create(['title' => 'Malcolm X']);
        Movie::create(['title' => 'Eternal Sunshine of the Spotless Mind']);
        Movie::create(['title' => 'Revolutionary Road']);
        Movie::create(['title' => 'The Reader']);
        Movie::create(['title' => 'Fight Club']);
        Movie::create(['title' => '12 Monkeys']);
        Movie::create(['title' => 'Once Upon a Time in Hollywood']);

    }
}
