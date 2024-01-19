<?php

namespace Tests\Unit;

use App\Models\Actor;
use Tests\TestCase;

class ActorTest extends TestCase
{
    /**
     * An actor can be created.
     */
    public function test_actor_can_be_created(): void
    {
        $actor = Actor::create(['name' => 'John Doe']);
        $this->assertDatabaseHas('actors', ['name' => 'John Doe']);
    }


}
