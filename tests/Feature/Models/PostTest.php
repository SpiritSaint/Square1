<?php

namespace Tests\Feature\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     */
    public function testUserMethod()
    {
        $post = Post::factory()->make();

        $user = User::factory()->create();

        $post = $user->posts()->create([
            "title" => $post->title,
            "description" => $post->description,
            "publication_date" => $post->publication_date,
        ]);

        $this->assertEquals($post->user->id, $user->id);
    }
}
