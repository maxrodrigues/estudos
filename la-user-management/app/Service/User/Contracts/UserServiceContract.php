<?php

namespace App\Service\User\Contracts;

use Illuminate\Support\Collection;

interface UserServiceContract
{
    public function createNewUser(array $attributes): Collection;
}
