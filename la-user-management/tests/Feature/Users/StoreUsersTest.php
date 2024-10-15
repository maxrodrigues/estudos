<?php

use function Pest\Faker\fake;

it ('create new user', function () {
    $response = $this->post(route('user.store'), [
        'name' => fake()->name,
        'email' => fake()->email,
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertStatus(201);
});

it ('return error when required field is empty', function () {
    $response = $this->post(route('user.store'), []);

    $response->assertJsonValidationErrors(['name', 'email', 'password']);
    $response->assertStatus(422);
});
