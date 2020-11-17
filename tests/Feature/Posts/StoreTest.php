<?php

namespace Tests\Feature\Posts;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StoreTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     */
    public function testExample()
    {
        $response = $this->actingAs(User::factory()->create())->post('/posts', [
            "title" => "Some fake title",
            "description" => "You should know that article is fake"
        ]);

        $response->assertRedirect('dashboard');
    }
}
