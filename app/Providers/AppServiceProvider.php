<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\categorias;
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
        $nCat = categorias::all();
        $nPag = pagos::all();
        $Usuarios = user::all();
        
        $query = "select p.id_categoria , p.titol from pagos p join categorias c ON c.id= p.id_categoria";

        View::share('pagas', $nPag);
        View::share('categ', $nCat);
        View::share('datos', $Usuarios);


    }
}
