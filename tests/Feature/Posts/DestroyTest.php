<?php

namespace Tests\Feature\Posts;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DestroyTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     */
    public function testUpdate()
    {
        $post = Post::factory()->make();

        $user = User::factory()->create();

        $user->update([
            "username" => "admin"
        ]);

        $post = $user->posts()->create([
            "title" => $post->title,
            "description" => $post->description,
            "publication_date" => $post->publication_date,
        ]);

        $response = $this->actingAs($user)->delete('/posts/' . $post->id);

        $response->assertRedirect('dashboard');
    }
}
