<?php

namespace App\Providers\User;

use App\Service\User\Contracts\UserServiceContract;
use App\Service\User\UserService;
use Illuminate\Support\ServiceProvider;

class UserServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserServiceContract::class,
            UserService::class
        );
    }

    public function provides(): array
    {
        return [
            UserServiceContract::class
        ];
    }
}
