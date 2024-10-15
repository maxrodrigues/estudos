<?php

namespace App\Service\User;

use App\Repository\User\Contracts\UserRepositoryContract;
use App\Service\User\Contracts\UserServiceContract;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceContract
{
    public function __construct(private UserRepositoryContract $userRepository)
    {
        //
    }

    public function createNewUser(array $attributes): Collection
    {
        $attributes['password'] = Hash::make($attributes['password']);
        return collect($this->userRepository->create($attributes));
    }
}
