<!-- Button trigger modal -->
<button type="button" id="modalBtnClick" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
Afegir usuari</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="0" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Insertar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <form method="post" action="afegirUser">
        @csrf 
        {{ method_field('POST') }}

        Nom del usuari<br>
        <input Type="text" name="nUser" id="nUser" placeholder="Nom Usuari" required></input><br>
        Correo electronic<br>
        <input Type="text" name="cUser" id="cUser" placeholder="Correo electronic" pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$" required></input><br>
        Contraseña per defecte<br>
        <input Type="text" name="cPw" id="cPw" placeholder="Contrasenya" required></input><br>
        administrador?<br>
        <input type="hidden" name="cAdmin" value="0" />
        <input Type="checkbox" name="cAdmin" id="cAdmin" value='1'></input><br>
           
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">tornar</button>
        <button type="submit" class="btn btn-primary" >Afegir</button>
        </form>
      </div>
    </div>
  </div>
</div>
