@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" media="screen" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<style>
h2{text-align: center;
font-size: 1em;}
</style>

<div id="contingut" class="p-3 px-5">
    	
    <h1>Adhesió projecte reciclatge llibres Ajuntament</h1>
    <p>Benvolguts/des,</p>
<p>Amb l'objectiu de facilitar-vos el pagament per adherir-vos al Projecte de Reciclatge de llibres de l'Ajuntament de Calafell, hem habilitat aquest dispositiu</p>
<p>No us oblideu d'enviar el comprovant bancari a l'adreça <a href="mailto:llibres@inscamidemar.cat">llibres@inscamidemar.cat</a> i anotar el nom i cognoms de l'alumne/a al cos o a l'assumpte del correu</p>
<p>Moltes gràcies</p>    <a class="button-style" href="javascript: void(0)" onclick="document.getElementById('form_275').submit();">Fer el pagament</a>
    	<form action="https://sis.redsys.es/sis/realizarPago" method="post" accept-charset="utf-8" id="form_275">
	    <input type="hidden" name="Ds_SignatureVersion" value="HMAC_SHA256_V1">
	    <input type="hidden" name="Ds_MerchantParameters" value="eyJEU19NRVJDSEFOVF9BTU9VTlQiOiI0MDAwIiwiRFNfTUVSQ0hBTlRfT1JERVIiOiIyMTA0MjcxNzIwMDgiLCJEU19NRVJDSEFOVF9NRVJDSEFOVENPREUiOiIwMjIzMTY3OTkwIiwiRFNfTUVSQ0hBTlRfQ1VSUkVOQ1kiOiI5NzgiLCJEU19NRVJDSEFOVF9UUkFOU0FDVElPTlRZUEUiOiIwIiwiRFNfTUVSQ0hBTlRfVEVSTUlOQUwiOiIxIiwiRFNfTUVSQ0hBTlRfTUVSQ0hBTlRVUkwiOiJodHRwczovL3BhZ2FtZW50cy5pbnNjYW1pZGVtYXIuY2F0L2luZGV4LnBocC9yZXN1bHRhdCIsIkRTX01FUkNIQU5UX0NPTlNVTUVSTEFOR1VBR0UiOiIzIn0=">
	    <input type="hidden" name="Ds_Signature" value="kODl4Y9ZM1PJDhUugWCNEqcWeY2wXOLOQjH5sAFKAMk=">
	</form>
	<br>
        <a class="btn btn-twitter" href="http://twitter.com/home?status=https://pagaments.inscamidemar.cat/pagament/ESO/275">Twitter</a>
		<a class="btn btn-facebook" href="http://facebook.com/sharer.php?u=https://pagaments.inscamidemar.cat/pagament/ESO/275">Facebook</a>
		<a class="btn btn-whatsapp" href="https://api.whatsapp.com/send?text=Mira los pagos activos de https://pagaments.inscamidemar.cat/pagament/ESO/275">WhatsApp</a>
		<a class="btn btn-telegram" href="tg:msg_url?url=https://pagaments.inscamidemar.cat/pagament/ESO/275&amp;text=Pagaments de l'Ins Camí de Mar">Telegram</a>
    </div>

@endsection
