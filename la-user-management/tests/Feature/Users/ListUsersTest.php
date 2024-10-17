<?php

it ('list ten users per page', function () {
    \App\Models\User::factory()->count(40)->create();

    $response = $this->get(route('users.list'));
    $data = json_decode($response->content(), true);

    $this->assertCount(10, $data['data']['data']);

    $response = $this->get(route('users.list', ['page' => 2]));
    $data = json_decode($response->content(), true);

    $this->assertCount(10, $data['data']['data']);
});
