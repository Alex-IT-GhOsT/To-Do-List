<?php

namespace App\Providers;

use App\Interfaces\Repositories\TaskRepositoryInterface;
use App\Interfaces\Service\TaskServiceInterface;
use App\Repositories\Task\TaskRepository;
use App\Services\TaskService\TaskService;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);
        $this->app->bind(TaskServiceInterface::class, TaskService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
