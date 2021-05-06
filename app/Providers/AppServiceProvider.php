<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\categorias;
use DB;
use App\pagos;
use App\User;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {       
        if (! $this->app->runningInConsole()) {
        $nCat = categorias::all();
        $nPag = pagos::all();
        $Usuarios = user::all();
        

        View::share('pagas', $nPag);
        View::share('categ', $nCat);
        View::share('datos', $Usuarios);
        }


    }
}
