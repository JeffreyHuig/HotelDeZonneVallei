<?php

use App\Models\User;

test('profile page is displayed', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->get('/profile');

    $response->assertOk();
});

test('profile information can be updated', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->patch('/profile', [
            'firstName' => 'Test',
            'lastName' => 'User',
            'phone' => '0612345678',
            'email' => 'test@example.com',
        ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect('/profile');

    $user->refresh();

    $this->assertSame('Test', $user->firstName);
    $this->assertSame('User', $user->lastName);
    $this->assertSame('0612345678', $user->phone);
    $this->assertSame('test@example.com', $user->email);
    $this->assertNull($user->email_verified_at);
});

test('phone number keeps its preceding zero', function () {
    $user = User::factory()->create(['phone' => '0612345678']);

    $this->actingAs($user)
        ->get('/profile')
        ->assertOk()
        ->assertSee('0612345678');

    $this->actingAs($user)
        ->patch('/profile', [
            'firstName' => $user->firstName,
            'lastName' => $user->lastName,
            'phone' => '0687654321',
            'email' => $user->email,
        ])
        ->assertSessionHasNoErrors();

    $this->assertSame('0687654321', $user->refresh()->phone);
    $this->assertDatabaseHas('users', ['phone' => '0687654321']);
});

test('phone number without a preceding zero is rejected', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->from('/profile')
        ->patch('/profile', [
            'firstName' => $user->firstName,
            'lastName' => $user->lastName,
            'phone' => '612345678',
            'email' => $user->email,
        ])
        ->assertSessionHasErrors('phone')
        ->assertRedirect('/profile');
});

test('email verification status is unchanged when the email address is unchanged', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->patch('/profile', [
            'firstName' => 'Test',
            'lastName' => 'User',
            'phone' => $user->phone,
            'email' => $user->email,
        ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect('/profile');

    $this->assertNotNull($user->refresh()->email_verified_at);
});

test('user can delete their account', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->delete('/profile', [
            'password' => 'password',
        ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect('/');

    $this->assertGuest();
    $this->assertNull($user->fresh());
});

test('correct password must be provided to delete account', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->from('/profile')
        ->delete('/profile', [
            'password' => 'wrong-password',
        ]);

    $response
        ->assertSessionHasErrorsIn('userDeletion', 'password')
        ->assertRedirect('/profile');

    $this->assertNotNull($user->fresh());
});
