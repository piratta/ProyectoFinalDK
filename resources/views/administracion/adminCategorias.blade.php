@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" media="screen" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet"/>
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

<style>
h2{text-align: center;}</style>

</script>


<!--
    panel de administración donde se gestionarán los usuarios.
    Creación con la función DataTable(), la tabla dinamica.
 -->
   <h2>Panel de administración</h2>
   
      <script>
      /*
      *Creación de la datatable
      *la etiqueta dom añade a la tabla la información que queramos.
      *
      */
$(document).ready(function() {
    $('#tablaDatos').DataTable( {
        dom: 'Bfrtlip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf'
        ]
    } );

   } );

</script>

<a href="professorat">Professorat</a>-><a href="adminCategorias"><b>Categorias</b></a>

<table id="tablaDatos" class="display" style="width:100%">
        <thead>
        
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Activo/inactivo</th>
                <th>Acción</th>
           </tr>
        </thead>
        <tbody>

        @foreach ($queryUsuario as $datos)    
                  

            <tr>
                <td id='<?=  $datos -> id  ?>'>{{ $datos -> id}}</td>
                <td>{{ $datos -> name}}</td>
                <td>{{ $datos -> email }}</td>  
                <th> 
                    <div class="margin-l-15 checkbox checkboxStyle-table checkColorGreenLight">
                    @if ($datos ->  admin == 1)
                        <input type="checkbox" class="tableid" name="tableid" id="tableid" class="click" checked>
                        <label class="s18 text-normal"></label>
                    
                    @else
                        <input type="checkbox" class="tableid" name="tableid" id="tableid" class="click">
                        <label class="s18 text-normal"></label>
                    
                    @endif
                     </div>
                </th>
                <td>
                <form method="post" action="borrar"><input value="<?=  $datos -> id  ?>" Type="hidden" name="id" id="'<?=  $datos -> id  ?>'"/>
                @csrf
                <button id="borrar">
                               
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                </button>
        
                    </form>
                    
                  

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>

                    
                </td>  
                            
            </tr>


            @endforeach    
            
            

        </tfoot>
    </table>
 



@endsection
