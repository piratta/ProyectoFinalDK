<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\categorias;
use App\pagos;


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
        $nCat = categorias::all();
        $nPag = pagos::all();
        
        
        View::share('pagas', $nPag);
        View::share('cursos', $nCat);

    }
}
