<?php

namespace Tests\Feature;

use Database\Seeders\ActorsSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class searchActorsTest extends TestCase
{
    public function test_search_actors(): void
    {
        $this->seed(ActorsSeeder::class);
        
        $response = $this->get('/actors?search=Leo');

        $response->assertSeeText('Leonardo');
    }
}
