@extends('layouts.menu')

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
<!-- mover a un css aparte-->


<!--
    panel de administración donde se gestionarán los usuarios.
    Creación con la función DataTable(), la tabla dinamica.
 -->
   <h2 class="text-center">Panel de administració</h2>
   
      <script>
      /*
      *Creación de la datatable
      *la etiqueta dom añade a la tabla la información que queramos.
      *
      */
$  (document).ready(function() {
    $('#tablaDatos').DataTable( {
        dom: 'Bfrtlip',
        buttons: [
            'copy', 'excel', 'pdf'
        ]
    } );

    $('.bEdit').click(function (){

            $valor =  $(this).closest("tr").find('td:nth-child(2)').html();
                $("#modTitol").attr('value', $valor);

            $valor1 =  $(this).closest("tr").find('td:nth-child(3)').html();
                $("#modDes").html($valor1);
                
            $valor2 =  $(this).closest("tr").find('td:nth-child(4)').html();
                $("#modInici").attr('value', $valor2);
            
            $valor3 =  $(this).closest("tr").find('td:nth-child(5)').html();
                $("#modFi").attr('value', $valor3);  

            $valor4 =  $(this).closest("tr").find('td:nth-child(6)').html();
                $("#modPreu").attr('value', $valor4);
            $valor5 =  $(this).closest("tr").find('td:nth-child(7)').html();
                $("#modPreu").attr('value', $valor4);
            
           
                
            
            $valor_id = $(this).attr('data-id');
                $("#id_editar").attr('value', $valor_id);

                
    });

  /*
  * Se mueve al fuera del body para que pueda ser funcional.
  */
    $("#staticBackdrop").prependTo("body");
    $("#modify").prependTo("body");
   
       

   } );

</script>

<a href="/admin">Administació</a>-><a href="adminPagos"><b>Pagaments</b></a>

<table id="tablaDatos" class="display">
        <thead>
        
            <tr>
               
                <th>Categoria</th>
                <th>Titol</th>
                <th>Descripció</th>
                <th>Data inici</th>
                <th>Data final</th>
                <th>Preu</th>
                <th>estat</th>
                <td>Accio</td>  

           </tr>
        </thead>
        <tbody>

        @foreach ($pagas as $pago)    
                  

            <tr>    
                <td>{{ $pago->nivel }}</td>  
                <td>{{ $pago -> titol }}</td>  
                <td>{{ $pago -> descipcio }}</td>  
                <td>{{ $pago -> data_inici }}</td>  
                <td>{{ $pago -> data_fi }}</td>  
                <td>{{ $pago -> preu }}</td>  
                <td>{{ $pago -> estat }}</td>  




                <td>
                <form method="post" action="borrarPago"><input value="<?=  $pago -> id  ?>" Type="hidden" name="id" id="'<?=  $pago -> id  ?>'"/>
                @csrf
                <button class="borrar">
                               
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                </button>
        
                    </form>
                    
                    <form  method="post" action="editar" >

                        <button class="bEdit" data-id="{{  $pago -> id  }}" type="button" data-toggle="modal" data-target="#modify">
                            <input type="hidden" id="{{  $pago -> id  }}" name="id_mod" value="{{  $pago -> id  }}"/>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                        </button>    
                    </form>
                    
                </td>  
                            
            </tr>


            @endforeach    
            
            

        </tfoot>
    </table>
 
    @include('administracion.insertarP')
    @include('administracion.modificarP')



@endsection
