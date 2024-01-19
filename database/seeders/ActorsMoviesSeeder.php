<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;
use App\Models\Movie;

class ActorsMoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->attachMoviesToActor('Leonardo DiCaprio', [
            'Titanic',
            'Inception',
            'The Wolf of Wall Street',
            'Revolutionary Road',
            'Once Upon a Time in Hollywood',
        ]);

        $this->attachMoviesToActor('Meryl Streep', [
            'Sophie\'s Choice',
            'The Devil Wears Prada',
            'Kramer vs. Kramer',
        ]);

        $this->attachMoviesToActor('Denzel Washington', [
            'Training Day',
            'Fences',
            'Malcolm X',
        ]);

        $this->attachMoviesToActor('Brad Pitt', [
            'Fight Club',
            '12 Monkeys',
            'Once Upon a Time in Hollywood',
        ]);

        $this->attachMoviesToActor('Kate Winslet', [
            'Titanic',
            'Revolutionary Road',
            'The Reader',
        ]);
    }

    private function attachMoviesToActor(string $actorName, array $movieTitles): void
    {
        $actor = Actor::where('name', $actorName)->first();

        foreach ($movieTitles as $movieTitle) {
            $movie = Movie::where('title', $movieTitle)->first();
            $actor->movies()->attach($movie);
        }
    }
}
