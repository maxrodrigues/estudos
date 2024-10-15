<?php

namespace App\Providers;

use App\Repository\BaseRepository;
use App\Repository\Contracts\BaseRepositoryContract;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class BaseRepositoryServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            BaseRepositoryContract::class,
            BaseRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function provides(): array
    {
        return [
            BaseRepositoryContract::class
        ];
    }
}
