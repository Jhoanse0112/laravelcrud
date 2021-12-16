@extends('layouts.plantillabase');

@section('contenido')

<h2>CREAR REGISTROS</h2>

<form action ="/articulos" method="POST">

<div class="mb-3">

<label for=""class="form-label">CODIGO</label>
<input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">

<label for="" class="form-label">DESCRIPCION</label>
<input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">

<label for="" class="form-label">CANTIDAD</label>
<input id="cantidad" name="cantidad" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">

<label for="" class="form-label">PRECIO</label>
<input id="precio" name="precio" type="text" class="form-control" tabindex="1">
</div> 
<a href="/articulos" class="btn btn-secondary" tabinex="5">CANCELAR</a>
<buttom type="submit" class="btn btn-primary" tabienx="4">GUARDAR</buttom>
</form>
@endsection