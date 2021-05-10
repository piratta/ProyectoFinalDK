<!-- Button trigger modal -->
<button type="button" id="modalBtnClick" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
Afeg    ir pagament</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="0" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Insertar pagament</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <form method="post" action="afegirPagament">
        @csrf 
        {{ method_field('POST') }}

        Nivell<br>
        <select  name="nCategoria">
        @foreach ($categ as $categoria)
        
        <option id="{{ $categoria->id }}" value="{{ $categoria->id }}">{{$categoria->Categoria}}</option>
        @endforeach
        </select>
        <br>
        Titol<br>
        <input Type="text" name="nTitol" id="nTitol" placeholder="Titol del pagament"></input><br>
        Descripció<br>
        <input Type="text" name="nDescrp" id="nDescrp" placeholder="Descripció"></input><br>
        Preu<br>
        <input Type="number" name="nPreu" id="nPreu" placeholder="Preu"></input><br>     
        Data inici:
        <input name="nInici" type="date"/>
        Data fi:
        <input name="nFi" type="date"/>
           
           
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">tornar</button>
        <button type="submit" class="btn btn-primary" >Afegir</button>
        </form>
      </div>
    </div>
  </div>
</div>
