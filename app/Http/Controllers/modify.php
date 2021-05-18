<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\categorias;
use App\User;
use DB;
use Auth;
use App\pagos;
use App\cuentas;
use Carbon\Carbon;



class modify extends Controller
{
    public function modifyCat(Request $request){

    $id = $request -> id_edit;
 
    $edita = Auth::User()->id;
    $hora = Carbon::now()->toDateTimeString();
    $nCat = $request ->modCate;

   
         $updateCat = DB::select('select Categoria from categorias where id='. $id);
         $updateCat = DB::update('update categorias set updated_at = "'.$hora.'" where id ='. $id);
         $updateCat = DB::update('update categorias set Categoria = "'.$nCat.'" where id ='. $id);
         $updateCat = DB::update('update categorias set update_by = "'.$edita.'" where id ='. $id);

       
        return redirect('adminCategorias');  
    }
    public function modifyPagos(Request $request){


    $id = $request -> id_edit;
 
    $edita = Auth::User()->id;
    $hora = Carbon::now()->toDateTimeString();
    $nCat = $request ->modPag;

   
         $updateCat = DB::select('select Categoria from categorias where id='. $id);
         $updateCat = DB::update('update categorias set updated_at = "'.$hora.'" where id ='. $id);
         $updateCat = DB::update('update categorias set Categoria = "'.$nCat.'" where id ='. $id);
         $updateCat = DB::update('update categorias set update_by = "'.$edita.'" where id ='. $id);


    }

}
