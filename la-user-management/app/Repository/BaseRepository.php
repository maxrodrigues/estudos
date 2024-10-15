<?php

namespace App\Repository;

use App\Repository\Contracts\BaseRepositoryContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryContract
{
    public function all(array $columns = ['*']): Collection
    {
        return $this->model::all();
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }
}
