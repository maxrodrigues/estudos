<?php

namespace App\Repository\User\Contracts;

use App\Repository\Contracts\BaseRepositoryContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface UserRepositoryContract extends BaseRepositoryContract
{
    public function getUsersWithFilters(array $filters = [], int $page = 1, int $perPage = 10): LengthAwarePaginator;
}
