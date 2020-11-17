<?php

namespace Tests\Feature\Console;

use App\Jobs\ExtractFeed;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExtractFeedTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExtract()
    {
        $job = new ExtractFeed();

        $res = $job->handle();
        $this->assertNull($res);
    }
}
