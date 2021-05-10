<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\categorias;
use App\User;
use DB;
use Auth;
use App\pagos;



class afegir extends Controller
{
    public function addCategoria(Request $request){

        $categoria = new categorias();
    

        $categoria->Categoria=$request->categori;
        $categoria->update_by=Auth::User()->id;
        $categoria->created_by=Auth::User()->id;


        $categoria->save();
       
        return redirect('adminCategorias');

    }


    public function addUser(Request $request){

        $usuari = new User();
    

        $usuari->name=$request->nUser;
        $usuari->email=$request->cUser;
        $usuari->password=$request->cPw;
        $usuari->admin=$request->cAdmin;
        $usuari->update_by=Auth::User()->id;
        $usuari->created_by=Auth::User()->id;


        $usuari->save();
       
        return redirect('adminUsuarios');

    }
    public function addPagos(Request $request){

       
        $pagos = new pagos();
    
       
        $pagos->nivel=$request->nCategoria;

        $pagos->titol=$request->nTitol;
        $pagos->descipcio=$request->nDescrp;
        $pagos->preu=$request->nPreu;

        $pagos->update_by=Auth::User()->id;
        $pagos->created_by=Auth::User()->id;
        $pagos->id_usuario=Auth::User()->id;

        $pagos->id_categoria=$request->nCategoria;


        $pagos->data_inici=$request->nInici;
        $pagos->data_fi=$request->nFi;
        $pagos->save();
       
        return redirect('adminPagos');

    }
    
}
