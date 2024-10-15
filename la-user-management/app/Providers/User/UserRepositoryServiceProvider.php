<?php

namespace App\Providers\User;

use App\Repository\User\Contracts\UserRepositoryContract;
use App\Repository\User\UserRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class UserRepositoryServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserRepositoryContract::class,
            UserRepository::class
        );
    }

    public function provides(): array
    {
        return [
            UserRepositoryContract::class
        ];
    }
}
