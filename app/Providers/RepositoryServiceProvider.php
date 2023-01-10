<?php 
namespace App\Providers;

use App\Repositories\Implementations\BaseRepository;
use App\Repositories\Implementations\UserRepository;
use App\Repositories\Interfaces\IUserRepository;
use Illuminate\Support\ServiceProvider;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(
            IRepository::class,
            BaseRepository::class
        );
        $this->app->singleton(
            IUserRepository::class,
            UserRepository::class
        );
        
    }

    public function boot()
    {

    }
}
