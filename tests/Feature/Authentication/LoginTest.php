<?php

namespace Tests\Feature\Authentication;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * @return void
     */
    public function testLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testPostLogin()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/login', [
            "username" => $user->username,
            "password" => "password"
        ]);

        $response->assertRedirect('dashboard');
    }
}
