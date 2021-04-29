<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use app\User;

class pagosControllers extends Controller
{
    public function pagos()
    {
        return view('general/pagos');
    }
    public function taquilla()
    {
        return view('general/llogerTaquilles');
    }
    public function reciclaje()
    {
        return view('general/reciclaje');
    }
    
    public function reciclajeAyuntamiento()
    {
        return view('general/reciclajeAyuntamiento');
    }
}
