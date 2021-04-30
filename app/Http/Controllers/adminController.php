<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use app\User;
use Auth;



class adminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if(Auth::user()-> admin == 1 ){
            

        return view('administracion/admin');
        }else return view('/home');


    }

    public function getUser(){
        if(Auth::user()-> admin == 1 ){
        return view('administracion.adminUsuarios');
    }else return view('/login');
    
    }

    public function getPay(){
        if(Auth::user()-> admin == 1 ){
        return view('administracion.adminPagos');
    }else return view('/login');

    }
    public function getCategorias(){
        if(Auth::user()-> admin == 1 ){ 

            $users = user::all();      

            
               
        return view('administracion.adminCategorias',['queryUsuario' => $users]);
        
    }else return view('/login');
    }
    
}