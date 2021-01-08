<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function() {
            //return '/~ptdw-2020-gr3';
            return '';
<<<<<<< HEAD
         //   
         });
=======
          });
>>>>>>> f8d25d710c7ac5cb16bf7bb00feb6db0ef29c314
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
