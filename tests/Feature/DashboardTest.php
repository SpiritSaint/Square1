<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     */
    public function testDashboard()
    {
        $post = Post::factory()->make();

        $user = User::factory()->create();

        $post = $user->posts()->create([
            "title" => $post->title,
            "description" => $post->description,
            "publication_date" => $post->publication_date,
        ]);

        $response = $this->actingAs(User::factory()->create())->get('/dashboard');

        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testDashboardWithSorting()
    {
        $response = $this->actingAs(User::factory()->create())->get('/dashboard?sort=asc');

        $response->assertStatus(200);
    }
}
