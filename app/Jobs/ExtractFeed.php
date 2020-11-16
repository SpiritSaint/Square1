<?php

namespace App\Jobs;

use App\Models\Post;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class ExtractFeed implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $payload = Http::get('https://sq1-api-test.herokuapp.com/posts')->json();

        $admin = User::query()
            ->where("email", "admin@example.com")
            ->firstOrFail();

        collect($payload["data"])->each(function($post) use ($admin) {
            Post::create([
                "user_id" => $admin->id,
                "title" => $post["title"],
                "description" => $post["description"],
                "publication_date" => $post["publication_date"],
            ]);
        });
    }
}
