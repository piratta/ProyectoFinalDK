
<!-- Modal -->
<div class="modal fade" id="modify" data-backdrop="static" data-keyboard="false" tabindex="0" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modificar Usuari</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
     
        <form method="post" action="/modifyUsers">
        @csrf 
        {{ method_field('POST') }}
        <input type="hidden" id="id_editar" name="id_edit" />

       Nom<br>
        <input Type="text" name="modName" class="modName" id="modName" value=""></input><br>
        Correo Electronic<br>
        <input Type="text" name="modEmail" class="modEmail" id="modEmail" value=""></input><br>
        Admin<br>
        <select id="modAdmin" name="modAdmin" name="modAdmin">
            <option value="0">No</option>
            <option value="1">Si</option>
        </select>

       
        
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">tornar</button>
        <button type="submit" class="btn btn-primary" >Modificar</button>
        </form>
      </div>
    </div>
  </div>
</div>
