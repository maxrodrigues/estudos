<?php

namespace App\Service\User\Contracts;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface UserServiceContract
{
    /**
     * Create new User
     *
     * @param array $attributes
     * @return Collection
     */
    public function createNewUser(array $attributes): Collection;

    /**
     * Get all users with filters
     *
     * @param array $filters
     * @return LengthAwarePaginator
     */
    public function getUsers(array $filters = []): LengthAwarePaginator;
}
