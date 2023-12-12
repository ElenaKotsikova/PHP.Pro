<?php

namespace App\Providers;

use App\Services\Book\BookService;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Laravel\Dusk\DuskServiceProvider;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('book', BookService::class);
        if ($this->app->environment('local', 'testing', 'staging'))
        {
                $this->app->register(DuskServiceProvider::class); }

        }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        JsonResource::withoutWrapping();
        //Paginator::useBootstrap();





    }
}
