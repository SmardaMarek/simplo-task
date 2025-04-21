<?php

namespace App\Containers\Customer\Providers;
use App\Containers\Customer\Data\Repositories\CustomerRepositoryInterface;
use App\Containers\Customer\Data\Repositories\CustomerRepository;

use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__ . '/../UI/API/Routes/CustomerRoutes.php';
    }
}
