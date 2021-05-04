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

    

   /* $query = "SELECT categories.id as id, `category`,
    categorias.created_at as created_at, categorias.updated_at as updated_at,
    users1.name as created_by, users2.name as updated_by
    FROM categories
    JOIN users users1 ON categories.created_by = users1.id
    JOIN users users2 ON categories.updated_by = users2.id
    WHERE categories.deleted_at IS NULL;"*/

        return redirect('/adminUsuarios');

    }
}
