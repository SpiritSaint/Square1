<?php

namespace Tests\Feature\Posts;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     */
    public function testIndex()
    {
        $response = $this->actingAs(User::factory()->create())->get('/posts/create');

        $response->assertStatus(200);
    }
}
