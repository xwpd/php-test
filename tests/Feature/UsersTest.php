<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsersTest extends TestCase
{
    use RefreshDatabase;

    public function testNew()
    {
        $user = User::factory()->make();
        $response = $this->postJson('/api/users', $user->toArray());
        $response->assertOk();
        $this->assertDatabaseHas($user->getTable(), ['id1' => $user->id1, 'id2' => $user->id2]);
    }

    public function testFond()
    {
        $user = User::factory()->create();
        /**
         * @var User $user
         */
        $response = $this->postJson('/api/users', $user->toArray());
        $response->assertOk();
        $response->assertJson([
            'userID' => $user->userID
        ]);
    }
}
