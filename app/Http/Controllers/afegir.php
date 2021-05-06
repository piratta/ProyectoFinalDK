<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\categorias;
use App\User;
use DB;
use Auth;



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
    
}
