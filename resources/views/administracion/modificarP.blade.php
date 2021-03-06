
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
     
        <form method="post" action="/modifyPagos">
        @csrf 
        {{ method_field('POST') }}
        <input type="hidden" id="id_editar" name="id_edit" />

        Titol<br>
        <input Type="text" name="modTitol" class="modTitol" id="modTitol" value="" required></input><br>

        DescripciĆ³<br>
        <textarea  name="modDes" class="modDes" id="modDes" value="" ></textarea><br>

        Data inici:<br>

        <input name="modInici" id="modInici" type="date" /><br>
        Data fi:<br>

        <input name="modFi" id="modFi"  type="date" /><br>
        Preu:<br>
        <input type="number" id="modPreu" name="modPreu" min="0"/>
        <br>
        Estat<br>
        <select id="modStat" name="modStat" name="modStat">
            <option value="actiu">Actiu</option>
            <option value="inactiu">Inactiu</option>
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
