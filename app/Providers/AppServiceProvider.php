<?php

namespace App\Providers;

use App\Http\Controllers\News;
use App\Http\Controllers\Pages\NewsController;
use App\Http\Controllers\User\CharacterController;
use Barryvdh\Debugbar\ServiceProvider as DebugbarServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Fix for MariaDB Migrations
        Schema::defaultStringLength(191);

        # Define Role-related Blade directives
        Blade::if('superadmin', function ()
        {
            return auth()->check() && auth()->user()->gm >= 5;
        });
        
        Blade::if('admin', function ()
        {
            return auth()->check() && auth()->user()->gm >= 4;
        });

        Blade::if('gm', function ()
        {
            return auth()->check() && auth()->user()->gm >= 3;
        });

        Blade::if('intern', function ()
        {
            return auth()->check() && auth()->user()->gm >= 1;
        });

        # Extend Featured Widget layout's functionality
        view()->composer(config('enigma.theme.name').'.layout.featured', function ($view)
        {
            $controller = app(NewsController::class);
    
            # Get Featured Widget's data from the News Model
            $controller->articles = News::getFeatured();
            $view->with('featured', $controller->convertAttributes()->articles);
        });

        # Extend Character Widget layout's functionality
        view()->composer(config('enigma.theme.name').'.layout.character', function ($view)
        {
            $view->with('mainchar', app(CharacterController::class));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*if ($this->app->isLocal()) {
            $this->app->register(DebugbarServiceProvider::class);
        }*/
    }
}
