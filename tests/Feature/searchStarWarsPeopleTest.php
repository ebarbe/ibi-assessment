<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class searchStarWarsPeopleTest extends TestCase
{

    public function test_search_star_wars_people(): void
    {
        $response = $this->get('/star-wars/people?search=Luke');

        $response->assertSeeText('Luke Skywalker');
    }
}
