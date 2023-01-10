<?php

namespace App\Providers;
use App\Services\Implementations\AccountService;
use App\Services\Implementations\MailService;
use App\Services\Interfaces\IAccountService;
use App\Services\Interfaces\IMailService;
use Illuminate\Support\ServiceProvider;
class ServiceLayerProvider extends ServiceProvider
{
    /**
     * Register services.   
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            IAccountService::class,
            AccountService::class
        );
        $this->app->singleton(
            IMailService::class,
            MailService::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}