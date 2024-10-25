<?php

namespace App\Repository\User;

use App\Enum\RolesEnum;
use App\Models\User;
use App\Repository\BaseRepository;
use App\Repository\User\Contracts\UserRepositoryContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class UserRepository extends BaseRepository implements UserRepositoryContract
{
    public function __construct(protected User $model)
    {
        //
    }

    public function getUsersWithFilters(array $filters = [], int $page = 1, int $perPage = 10): LengthAwarePaginator
    {
        return $this->model
            ->when(! empty($filters['active']), function ($query) use ($filters) {
                $query->where('is_active', $filters['active']);
            })
            ->when(! empty($filters['role']), function ($query) use ($filters) {
                $query->where('role_id', RolesEnum::fromName($filters['role']));
            })
            ->paginate($perPage);
    }
}
