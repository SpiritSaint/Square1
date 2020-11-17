<?php

namespace Tests\Feature\Framework;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ScheduleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     */
    public function testSchedule()
    {
        $user = User::factory()->create();

        $user->update([
            "username" => "admin"
        ]);

        $response = $this->artisan('schedule:run');

        $response->assertExitCode(0);
    }
}
