<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\categorias;

use Auth;
use DB;
use App\pagos;


class borrarControllers extends Controller
{
    public function borrarUsuarios(Request $request){
        $id=$request->id;
        $usuario = User::find($id);
       
        
        $usuario_mod =  Auth::User()->id ;
            DB::table('users')
            ->where([ 'id' => $id])
               ->update(['update_by' => $usuario_mod]);
               $usuario->delete();

    

   /* $query = "SELECT categories.id as id, `category`,
    categorias.created_at as created_at, categorias.updated_at as updated_at,
    users1.name as created_by, users2.name as updated_by
    FROM categories
    JOIN users users1 ON categories.created_by = users1.id
    JOIN users users2 ON categories.updated_by = users2.id
    WHERE categories.deleted_at IS NULL;"*/

        return redirect('/adminUsuarios');

    }

    public function borrarCat(Request $request){
        $id=$request->id;
        $cate = categorias::find($id);
       
        
        $cate_mod =  Auth::User()->id ;
            DB::table('categorias')
            ->where([ 'id' => $id])
               ->update(['update_by' => $cate_mod]);
               $cate->delete();
   
        return redirect('/adminCategorias');

    }
    public function borrarPagament(Request $request){
        $id=$request->id;
        $pag = pagos::find($id);
       
        
        $pagos_mod =  Auth::User()->id ;
            DB::table('pagos')
            ->where([ 'id' => $id])
               ->update(['update_by' => $pagos_mod]);
               $pag->delete();
   
        return redirect('/adminPagos');

    }
    
}
