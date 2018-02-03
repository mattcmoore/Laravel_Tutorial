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
         * view composer in the boot() method, binds $archives to any view in the blog that includes the 'layouts.sidebar' so that they can always be accessed  
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
