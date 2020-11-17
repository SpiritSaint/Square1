<?php

namespace Tests\Feature\Authentication;

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
