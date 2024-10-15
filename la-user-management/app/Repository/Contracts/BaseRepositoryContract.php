<?php

namespace App\Repository\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryContract
{
    public function all(array $columns = ['*']): Collection;

    public function create(array $attributes): Model;
}
