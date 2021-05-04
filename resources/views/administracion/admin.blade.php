@extends('layouts.menu')

@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" media="screen" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<style>
h2{text-align: center;
font-size: 1em;}

</style>


   <h2>Panel de administración</h2>
   <br>

   <div class="row " >
         <div class="col-lg-3 mb-5 container-fluid" >
         <div class="card bg-primary text-white shadow">
               <div class="card-body">
               <a href="/adminPagos" class="text-white"> Administració de pagaments</a>
               </div>
         </div>
      </div>
      <div class="col-lg-3 mb-5 container-fluid">
         <div class="card bg-success text-white shadow">
               <div class="card-body">
               <a href="/adminUsuarios" class="text-white">Administració de Usuaris</a>
               </div>
         </div>
      </div>
      <div class="col-lg-3 mb-4 container-fluid">
         <div class="card bg-secondary text-white shadow">
               <div class="card-body">
               <a href="/adminCategorias" class="text-white">Administració de categories</a>
               </div>
         </div>
      </div>
   </div>

@endsection
