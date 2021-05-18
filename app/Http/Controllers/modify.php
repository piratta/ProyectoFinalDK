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

        $id = $request-> id_edit;
        //dd($id);
 
    $edita = Auth::User()->id;
    $hora = Carbon::now()->toDateTimeString();
    $nCat = $request ->modCate;

   
         //$updateCat = DB::select('select Categoria from categorias where id='. $id);
         $updateCat = DB::update('update categorias set updated_at = "'.$hora.'" where id ='. $id);

         $updateCat = DB::update('update categorias set Categoria = "'.$nCat.'" where id ='. $id);

         $updateCat = DB::update('update categorias set update_by = "'.$edita.'" where id ='. $id);

       
        return redirect('adminCategorias');  
    }

    public function modifyPagos(Request $request){


    $id = $request -> id_edit;
    $edita = Auth::User()->id;
    $hora = Carbon::now()->toDateTimeString();
 
    
    $titol= $request-> modTitol;
    $descr= $request -> modDes;
    $dataI = $request -> modInici;
    $dataF = $request -> modFi;
    $preu = $request -> modPreu;
    $estat = $request -> modStat;


   
         $updatePag = DB::update('update pagos set updated_at = "'.$hora.'" where id ='. $id);

         $updatePag = DB::update('update pagos set titol = "'.$titol.'" where id ='. $id);

         $updatePag = DB::update('update pagos set descipcio = "'.$descr.'" where id ='. $id);

         $updatePag = DB::update('update pagos set data_inici = "'.$dataI.'" where id ='. $id);

         $updatePag = DB::update('update pagos set data_fi = "'.$dataF.'" where id ='. $id);

         $updatePag = DB::update('update pagos set preu = "'.$preu.'" where id ='. $id);

         $updatePag = DB::update('update pagos set estat = "'.$estat.'" where id ='. $id);

         $updatePag = DB::update('update pagos set update_by = "'.$edita.'" where id ='. $id);

         return redirect('adminPagos');  


    }


    public function modifyUser(Request $request){

    $id = $request -> id_edit;
    $edita = Auth::User()->id;
    $hora = Carbon::now()->toDateTimeString();

    $nombre = $request -> modName;
    $email = $request -> modEmail;
    $admin = $request -> modAdmin;

    $updateUser = DB::update('update users set updated_at = "'.$hora.'" where id ='. $id);

    $updateUser = DB::update('update users set update_by = "'.$edita.'" where id ='. $id);

    $updateUser = DB::update('update users set name = "'.$nombre.'" where id ='. $id);

    $updateUser = DB::update('update users set email = "'.$email.'" where id ='. $id);

    $updateUser = DB::update('update users set admin = "'.$admin.'" where id ='. $id);


    return redirect('adminUsuarios');  



    }

    public function modifyAccs(Request $request){

    $id = $request -> id_edit;
    $edita = Auth::User()->id;
    $hora = Carbon::now()->toDateTimeString();

    $cuenta = $request ->modNum;
    $fuc = $request ->modFuc;

        
    $updateConta = DB::update('update cuentas set updated_at = "'.$hora.'" where id ='. $id);

    $updateConta = DB::update('update cuentas set update_by = "'.$edita.'" where id ='. $id);
    
    $updateConta = DB::update('update cuentas set cuenta = "'.$cuenta.'" where id ='. $id);

    $updateConta = DB::update('update cuentas set fuc = "'.$fuc.'" where id ='. $id);



    return redirect('adminCuenta');  

    

    }
    

        


}
