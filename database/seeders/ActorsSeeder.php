<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;

class ActorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actor::create(['name' => 'Leonardo DiCaprio']);
        Actor::create(['name' => 'Meryl Streep']);
        Actor::create(['name' => 'Denzel Washington']);
        Actor::create(['name' => 'Kate Winslet']);
        Actor::create(['name' => 'Brad Pitt']);

    }
}
