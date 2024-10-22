<?php

use App\Models\Role;
use App\Models\User;

it ('show user detail', function () {
    $users = User::factory(3)
        ->for(Role::factory()->create())
        ->create();

    $user = $users->random();

    $response = $this->get(route('users.show', ['user' => $user->id]));
    $this->assertJson($response->getContent());
});
