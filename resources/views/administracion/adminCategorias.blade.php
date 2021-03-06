@extends('layouts.menu')

@extends('layouts.app')

@section('content')


<!-- mover a un css aparte-->
<style>
h2{text-align: center;}</style>

</script>
@error('categori') 
{{$message}}
@enderror

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
    
    $('#tablaDatos').DataTable({
    dom: 'Bfrtlip',
    buttons: [
      'copy', 'excel', 'pdf'
    ]
  });

      $('.borrar').click(function compro(){

        if(confirm("Estas seguro de que quieres eliminar?")){
            $(this).find("form").submit();
            
            
        };
    });




    $('.bEdit').click(function (){
            $valor =  $(this).closest("tr").find('td:nth-child(1)').html();
                $("#modCate").attr('value', $valor);
            
            //escoger valor para modificar
            $valor_id =$(this).attr("data-id");
            $("#id_editar").attr('value', $valor_id);
            
    });


  /*
  * Se mueve al fuera del body para que pueda ser funcional.
  */
    $("#staticBackdrop").prependTo("body");
    $("#modify").prependTo("body");
   
       

   } );

  
</script>

<a href="/admin">Administació</a>-><a href="adminCategorias"><b>Categorias</b></a>
<table id="tablaDatos" class="display" style="width:100%">
        <thead>
        
            <tr>
              
                <th>Categoria</th>
                <th>Acció</th>
           </tr>
        </thead>
        <tbody>
        

        @foreach ($categ as $cats)    
            
            <tr>
               
                <td class="categoria">{{ $cats -> Categoria}}</td>
                <td>
                <button class="borrar">

                    <form method="post" action="borrarCat"><input  Type="hidden" value="<?=  $cats -> id  ?>" name="id" id="'<?=  $cats -> id  ?>'"/>
                     @csrf
                               
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
        
                    </form>
                    
               </button>
   
                
                <form  method="post" action="editar" >

                    <button class="bEdit" type="button" data-id="{{  $cats -> id  }}" data-toggle="modal" data-target="#modify">
                    <input type="hidden" id="<?=  $cats -> id  ?>" name="id_mod" value="{{  $cats -> id  }}"/>

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
 

@include('administracion.insertarB')

@include('administracion.modificarBcat')
                


@endsection

