
<!-- Modal -->
<div class="modal fade" id="modify" data-backdrop="static" data-keyboard="false" tabindex="0" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modificar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
     
        <form method="post" action="/modifyAccs">
        @csrf 
        {{ method_field('POST') }}
        <input type="hidden" id="id_editar" name="id_edit" />

        Numero de conta<br>
        <input Type="text" name="modNum" class="modNum" id="modNum" value="" required></input><br>

        FUC<br>
        <textarea  name="modFuc" class="modFuc" id="modFuc" value="" ></textarea><br>

       
        
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">tornar</button>
        <button type="submit" class="btn btn-primary" >Modificar</button>
        </form>
      </div>
    </div>
  </div>
</div>
