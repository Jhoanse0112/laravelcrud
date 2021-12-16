@extends('layouts.plantillabase');

@section('contenido')
<a href="articulos/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
    <head>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CODIGO</th>
            <th scope="col">DESCRIPCION</th>
            <th scope="col">CANTIDAD</th>
            <th scope="col">PRECIO</th>
            <th scope="col">ACCIONES</th>
            
</tr>
</thead>
<tbody>
    @foreach($articulos as $articulo)
    <tr>
        <td>{{$articulo->ID}}</td>
        <td>{{$articulo->CODIGO}}</td>
        <td>{{$articulo->DESCRIPCION}}</td>
        <td>{{$articulo->CANTIDAD}}</td>
        <td>{{$articulo->PRECIO}}</td>
        <td>{{$articulo->ACCIONES}}</td>
        <td>
            <a class="btn btn-info">EDITAR</a>
            <buttom class="btn btn-danger">ELIMINAR</bottom>
        
</tr>

    @endforeach
</table>   
@endsection