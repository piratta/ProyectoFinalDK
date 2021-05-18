@section('content')
@extends('layouts.menu')
@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" media="screen" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>


<div>
   <h2 class="text-center">{{ $finRuta->titol }}</h2>

   <h3><span>Benvolgudes famílies,</span></h3>
  
   <pre>
    {!! $finRuta-> descipcio !!}
   </pre>
   
   <p> IMPORT: {{$finRuta->preu}}€</p>
   
   <p>
      <b>Heu d'enviar el comprovant bancari mitjançant l'adreça electrònica del centre (<a href="mailto:e3007257@xtec.cat">e3007257@xtec.cat</a>), juntament&nbsp;amb la resta de documentació&nbsp;requerida per a formalitzar la matrícula del proper curs. MOLT IMPORTANT: Anoteu el nom i cognoms de l'alumne/a a l'apartat&nbsp;<i>assumpte&nbsp;</i>del correu electrònic.</b></p>
   
   <p>Salutacions i moltes gràcies</p>

      <a class="button-style" href="javascript: void(0)" onclick="document.getElementById('form_210').submit();">Fer el pagament</a>
      <form action="https://sis.redsys.es/sis/realizarPago" method="post" accept-charset="utf-8" id="form_210">
          <input type="hidden" name="Ds_SignatureVersion" value="HMAC_SHA256_V1">
          <input type="hidden" name="Ds_MerchantParameters" value="eyJEU19NRVJDSEFOVF9BTU9VTlQiOiI1MDAwIiwiRFNfTUVSQ0hBTlRfT1JERVIiOiIyMTA0MjcxNzAyMzMiLCJEU19NRVJDSEFOVF9NRVJDSEFOVENPREUiOiIwMDkxOTkxMzcyIiwiRFNfTUVSQ0hBTlRfQ1VSUkVOQ1kiOiI5NzgiLCJEU19NRVJDSEFOVF9UUkFOU0FDVElPTlRZUEUiOiIwIiwiRFNfTUVSQ0hBTlRfVEVSTUlOQUwiOiIxIiwiRFNfTUVSQ0hBTlRfTUVSQ0hBTlRVUkwiOiJodHRwczovL3BhZ2FtZW50cy5pbnNjYW1pZGVtYXIuY2F0L2luZGV4LnBocC9yZXN1bHRhdCIsIkRTX01FUkNIQU5UX0NPTlNVTUVSTEFOR1VBR0UiOiIzIn0=">
          <input type="hidden" name="Ds_Signature" value="b0pqVRH15AYyMlk/e9XKa21pNMtayYvwZTlrxkw880w=">
      </form>
      <br>

      Compartir contingut: 
      <a class="btn btn-social-icon btn-twitter">      
            <a href="https://twitter.com/intent/tweet?text=Pagament%20{{$finRuta->titol}}:&url=http://proyectofinaldk.com/pagos/{{$finRuta->id}}">  <span class="fa fa-twitter">   </span>  </a>
      </a>
      <a class="btn btn-social-icon btn-facebook">      
            <a href="https://www.facebook.com/sharer/sharer.php?u=http://proyectofinaldk.com/pagos/{{$finRuta->id}}">  <span class="fa fa-facebook">   </span>  </a>
      </a>
      <a class="btn btn-social-icon btn-telegram">      
            <a href="https://t.me/share/url?url=http://proyectofinaldk.com/pagos/{{$finRuta->id}}&text=Pagament%20{{$finRuta->titol}}:">  <span class="fa fa-telegram">   </span>  </a>
      </a>
      <a class="btn btn-social-icon btn-twitter">      
            <a href="https://api.whatsapp.com/send?text=Pagament%20{{$finRuta->titol}}:%20http://proyectofinaldk.com/pagos/{{$finRuta->id}}">  <span class="fa fa-whatsapp">   </span>  </a>
      </a>
  
</div>

@endsection
