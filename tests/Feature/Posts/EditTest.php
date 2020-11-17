<?php

namespace Tests\Feature\Posts;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     */
    public function testShow()
    {
        $post = Post::factory()->make();

        $user = User::factory()->create();

        $post = $user->posts()->create([
            "title" => $post->title,
            "description" => $post->description,
            "publication_date" => $post->publication_date,
        ]);

        $response = $this->actingAs(User::factory()->create())->get('/posts/' . $post->id . '/edit');

        $response->assertStatus(200);
    }
}
