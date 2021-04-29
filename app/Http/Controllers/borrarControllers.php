<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class borrarControllers extends Controller
{
    public function borrarUsuarios(Request $request){
        $id=$request->id;
        $usuario = User::find($id);
        $usuario->delete();



        return redirect('/adminUsuarios');

    }
}
