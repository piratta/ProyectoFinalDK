<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\categorias;
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
    
}
