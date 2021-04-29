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
    	
    <h1>LLOGUER TAQUILLES</h1>
    <p>Benvolgudes famílies,</p>
<p>Podeu fer l'ingrés de 30 euros en concepte de lloguer de taquilla.</p>
<p>Atentament</p>
<p>INS CAMÍ DE MAR</p>    <a class="button-style" href="javascript: void(0)" onclick="document.getElementById('form_273').submit();">Fer el pagament</a>
    	<form action="https://sis.redsys.es/sis/realizarPago" method="post" accept-charset="utf-8" id="form_273">
	    <input type="hidden" name="Ds_SignatureVersion" value="HMAC_SHA256_V1">
	    <input type="hidden" name="Ds_MerchantParameters" value="eyJEU19NRVJDSEFOVF9BTU9VTlQiOiIzMDAwIiwiRFNfTUVSQ0hBTlRfT1JERVIiOiIyMTA0MjcxNzIyMzciLCJEU19NRVJDSEFOVF9NRVJDSEFOVENPREUiOiIwMDkxOTkxMzcyIiwiRFNfTUVSQ0hBTlRfQ1VSUkVOQ1kiOiI5NzgiLCJEU19NRVJDSEFOVF9UUkFOU0FDVElPTlRZUEUiOiIwIiwiRFNfTUVSQ0hBTlRfVEVSTUlOQUwiOiIxIiwiRFNfTUVSQ0hBTlRfTUVSQ0hBTlRVUkwiOiJodHRwczovL3BhZ2FtZW50cy5pbnNjYW1pZGVtYXIuY2F0L2luZGV4LnBocC9yZXN1bHRhdCIsIkRTX01FUkNIQU5UX0NPTlNVTUVSTEFOR1VBR0UiOiIzIn0=">
	    <input type="hidden" name="Ds_Signature" value="KbQxLPfM40cDXi8sczqH7qc4pKKReuqYlO6Syf/HxjQ=">
	</form>
	<br>
        <a class="btn btn-twitter" href="http://twitter.com/home?status=https://pagaments.inscamidemar.cat/pagament/ESO/273">Twitter</a>
		<a class="btn btn-facebook" href="http://facebook.com/sharer.php?u=https://pagaments.inscamidemar.cat/pagament/ESO/273">Facebook</a>
		<a class="btn btn-whatsapp" href="https://api.whatsapp.com/send?text=Mira los pagos activos de https://pagaments.inscamidemar.cat/pagament/ESO/273">WhatsApp</a>
		<a class="btn btn-telegram" href="tg:msg_url?url=https://pagaments.inscamidemar.cat/pagament/ESO/273&amp;text=Pagaments de l'Ins Camí de Mar">Telegram</a>
    </div>

@endsection
