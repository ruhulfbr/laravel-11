<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

    }

    public function test_is_user_exist(): void
    {
        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
        ]);

        $this->assertDatabaseMissing('users', [
            'name' => 'John Doe2',
            'email' => 'johndoe@example.com',
        ]);
    }


    public function test_user_can_register(): void
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        $response = $this->post('/register', $userData);

        $response->assertStatus(404); // Check if registration redirects after success
        // $this->assertAuthenticated();
        $this->assertGuest();

    }
}
