<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\categorias;
use App\cuentas;
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

    public function borrarAcc(Request $request){

        $id=$request->id;
        $acc = cuentas::find($id);
       
        
        $cuenta_del =  Auth::User()->id ;
            DB::table('cuentas')
            ->where([ 'id' => $id])
               ->update(['update_by' => $cuenta_del]);
               $acc->delete();
   
        return redirect('/adminCuenta');

    }
    
}
