<?php

namespace Tests\Feature\Authentication;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * @return void
     */
    public function testRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
}
