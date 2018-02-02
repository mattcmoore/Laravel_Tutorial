<?php

namespace App\Providers;

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
        /*
         * view composer in the boot() method, where when 'layouts.sidebar' is included, a callback will load Post:      * archives() to view (which returns all the archives data needed to run 'layouts.sidebar' * in a given view)
         */
        
        view()->composer('layouts.sidebar', function($view){

            $view->with('archives', \App\Post::archives() );

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
