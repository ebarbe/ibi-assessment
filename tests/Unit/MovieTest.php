<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Movie;

class MovieTest extends TestCase
{
    /**
     * A movie can be created.
     */
    public function test_movie_can_be_created(): void
    {
        $movie = Movie::create(['title' => 'The Matrix']);
        $this->assertDatabaseHas('movies', ['title' => 'The Matrix']);
    }
}
