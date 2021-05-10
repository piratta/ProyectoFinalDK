<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\pagos;
use App\cuentas;


class pagosControllers extends Controller
{
    public function pagos(request $request)
    {
        //$query1 = select titol from pagos where id=$ruta;
        $ruta = $request->id;
        
        $finRuta = pagos::find($ruta);
        

        return view('general/pagos', compact('finRuta'));
    }
    
}
