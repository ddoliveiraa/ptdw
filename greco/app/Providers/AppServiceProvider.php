<?php

namespace App\Providers;

use App\Models\Entrada;
use App\Models\Saida;
use App\Observers\EntradaObserver;
use App\Observers\SaidaObserver;
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
            return '/~ptdw-2020-gr3';
            //return '';
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Entrada::observe(EntradaObserver::class);
        Saida::observe(SaidaObserver::class);
    }
}
