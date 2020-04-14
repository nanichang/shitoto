<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
class LinksServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
     
    public function boot()
    {
        //
    }
    
    /**
     * Register the application services.
     *
     * @return void
     */
     
    public function register()
    {
        $this->app->bind('App\Repositories\Links\LinksContract',
            'App\Repositories\Links\EloquentLinksRepository');
    }
}
