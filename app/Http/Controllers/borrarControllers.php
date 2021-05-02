<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

class borrarControllers extends Controller
{
    public function borrarUsuarios(Request $request){
        $id=$request->id;
        $usuario = User::find($id);
        $usuario->delete();
        
        $usuario_mod =  Auth::User()->name ;
            DB::table('users')
                ->where('id', $usuario->id)
                ->update(['update_by' => $usuario_mod]);

     

        return redirect('/adminUsuarios');

    }
}
