<?php 
namespace App\Providers;

use App\Repositories\Implementations\BaseRepository;
use App\Repositories\Implementations\UserRepository;
use App\Repositories\Interfaces\IUserRepository;
use App\Repositories\Interfaces\IPitchRepository;
use App\Repositories\Implementations\PitchRepository;
use App\Repositories\Interfaces\IPostRepository;
use App\Repositories\Implementations\PostRepository;
use App\Repositories\Interfaces\IBookingRepository;
use App\Repositories\Implementations\BookingRepository;
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
        $this->app->singleton(
            IPitchRepository::class,
            PitchRepository::class
        );
        $this->app->singleton(
            IPostRepository::class,
            PostRepository::class
        );
        $this->app->singleton(
            IBookingRepository::class,
            BookingRepository::class
        );
        
    }

    public function boot()
    {

    }
}
