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


class afegir extends Controller
{
    public function addCategoria(Request $request){
        $request->validate([
            'categori' => 'required|String|min:0|max:150',
            //...
        ]);

        $categoria = new categorias();
    

        $categoria->Categoria=$request->categori;
        $categoria->update_by=Auth::User()->id;
        $categoria->created_by=Auth::User()->id;

        


        $categoria->save();
       
        return redirect('adminCategorias');

    }


    public function addUser(Request $request){
        
        $request->validate([
            'nUser' => 'required|String|min:0|max:255',
            'cUser' => 'required|email|unique:users,email',
            
        ]);

        $usuari = new User();
    

        $usuari->name=$request->nUser;
        $usuari->email=$request->cUser;
        $usuari->admin=$request->cAdmin;
        $usuari->update_by=Auth::User()->id;
        $usuari->created_by=Auth::User()->id;


        $usuari->save();
       
        return redirect('adminUsuarios');

    }
    public function addPagos(Request $request){

        $request->validate([
            'nPreu' => 'required|Integer|min:0',
            'nDescrp' => 'required|String|min:0|max:150',
            'nTitol' => 'required|String|min:0|max:150',
            'nFi' => 'required|date',
            'nInici' => 'required|date',

           
        ]);

       
        $pagos = new pagos();
    
       
        $pagos->nivel=$request->nCategoria;

        $pagos->titol=$request->nTitol;
        $pagos->descipcio=$request->nDescrp;
        $pagos->preu=$request->nPreu;

        $pagos->update_by=Auth::User()->id;
        $pagos->created_by=Auth::User()->id;
        $pagos->id_usuario=Auth::User()->id;

        $pagos->id_cuenta=$request->nCuenta;

        $pagos->id_categoria=$request->nCategoria;
       

        $pagos->data_inici=$request->nInici;
        $pagos->data_fi=$request->nFi;
        $pagos->save();


        return redirect('adminPagos');

    }

    public function addConta(Request $request){

        $request->validate([
            'nConta' => 'required|String|min:0',
            'fuc' => 'required|String|min:0',

                      
        ]);


        $cuentas = new cuentas();
    
        $cuentas->cuenta=$request->nConta;
        $cuentas->fuc=$request->fuc;
        $cuentas->update_by=Auth::User()->id;
        $cuentas->created_by=Auth::User()->id;


        $cuentas->save();
       
        return redirect('adminCuenta');

    }
    
}
