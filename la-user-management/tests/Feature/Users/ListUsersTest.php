<?php

use App\Models\Role;
use App\Models\User;

it ('list ten users per page', function () {
    User::factory()
        ->forRole()
        ->count(40)
        ->create();

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
    User::factory()
        ->count(40)
        ->for(Role::factory()->create())
        ->create();

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

it ('list only admin users', function () {
    $adminRole = Role::factory()->create(['id' =>\App\Enum\RolesEnum::Admin, 'name' => 'admin']);
    $commonRole = Role::factory()->create(['id' => \App\Enum\RolesEnum::Common, 'name' => 'common']);

    User::factory()->count(4)->for($commonRole)->create();
    User::factory()->count(4)->for($adminRole)->create();

    $filter = [
        'filters' => [
            'role' => 'admin'
        ]
    ];

    $response = $this->get(route('users.list', $filter));
    $data = json_decode($response->content(), true);

    foreach($data['data']['data'] as $item) {
        $this->assertEquals($item['role_id'], $adminRole->id);
    }
});
