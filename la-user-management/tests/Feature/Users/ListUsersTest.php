<?php

it ('list ten users per page', function () {
    \App\Models\User::factory()->count(40)->create();

    $response = $this->get(route('users.list'));
    $data = json_decode($response->content(), true);

    $this->assertCount(10, $data['data']['data']);
    $this->assertEquals($data['data']['current_page'], 1);

    $response = $this->get(route('users.list', ['page' => 2]));
    $data = json_decode($response->content(), true);

    $this->assertCount(10, $data['data']['data']);
    $this->assertEquals($data['data']['current_page'], 2);
});

it ('list only active users', function () {
    \App\Models\User::factory()->count(40)->create();

    $filter = [
        'page' => 1,
        'filters' => [
            'active' => 1
        ]
    ];

    $response = $this->get(route('users.list', $filter));
    $data = json_decode($response->content(), true);

    foreach($data['data']['data'] as $item) {
        $this->assertTrue($item['is_active']);
    }
});
