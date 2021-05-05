<!-- Button trigger modal -->
<button type="button" id="modalBtnClick" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
Añadir Categoria</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="0" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Insertar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <form method="post" action="afegirCat">
        @csrf 
        {{ method_field('POST') }}
        Categoria<br>
        <input Type="text" name="categori" id="categori" placeholder="Insertar categoria"></input>
           
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">tornar</button>
        <button type="submit" class="btn btn-primary" >Afegir</button>
        </form>
      </div>
    </div>
  </div>
</div>
