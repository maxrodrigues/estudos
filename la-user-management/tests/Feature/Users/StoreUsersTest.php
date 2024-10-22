<?php

use function Pest\Faker\fake;

it ('create new user', function () {
    $attributes = [
        'name' => fake()->name,
        'email' => fake()->email,
        'password' => 'password',
        'password_confirmation' => 'password',
        'role_id' => \App\Models\Role::factory()->create()->id,
    ];

    $response = $this->post(route('user.store'), $attributes);
    unset($attributes['password']);
    unset($attributes['password_confirmation']);

    $response->assertJson(['data' => $attributes]);
    $response->assertStatus(201);
    $this->assertDatabaseCount('users', 1);
});

it ('return error when required field is empty', function () {
    $response = $this->post(route('user.store'), []);

    $response->assertJsonValidationErrors(['name', 'email', 'password']);
    $response->assertStatus(422);
});
