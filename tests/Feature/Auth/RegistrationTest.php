<?php

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
    $response = $this->post('/register', [
        'firstName' => 'Test',
        'lastName' => 'User',
        'dateOfBirth' => '1995-05-15',
        'phone' => '0612345678',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $this->assertAuthenticated();
    $this->assertDatabaseHas('users', [
        'email' => 'test@example.com',
        'dateOfBirth' => '1995-05-15',
    ]);
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('registration rejects a date of birth in the future', function () {
    $response = $this->post('/register', [
        'firstName' => 'Test',
        'lastName' => 'User',
        'dateOfBirth' => now()->addDay()->toDateString(),
        'phone' => '0612345679',
        'email' => 'future@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertSessionHasErrors('dateOfBirth');
    $this->assertGuest();
    $this->assertDatabaseMissing('users', ['email' => 'future@example.com']);
});
