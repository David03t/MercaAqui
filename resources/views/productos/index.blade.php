@extends('layouts.app')
@section('content')
<div id="tablaPrincipal">
  <table class="table table-bordered align-middle table-responsive">
    <thead>
      <tr class="text-center align-middle">
        <th class="col-2">Producto</th>
        <th class="col-1">Cantidad</th>
        <th class="col-1">Id</th>
        <th class="col-1">Precio Unitario</th>
        @can('soloAdmin')
        <th class="col-1">Acciones</th>
        @endcan
        
      </tr>
    </thead>
    <tbody>
      @foreach($producto as $producto)
      <tr >
        <td ><img src="{{$producto->Imagen}}" alt="imagen del producto" class="imagenesTablas vertical">{{$producto->Nombre_producto}}</td>
        <td class="text-center vertical">{{$producto->Cantidad}}</td>
        <th class="text-center vertical">{{$producto->id}}</th>
        <td class="text-center vertical">{{$producto->Precio}}</td>
        @can('soloAdmin')
        <td class="text-center  vertical">
          <a href="/productos/{{$producto->id}}/edit" class="btn btn-warning">Modificar</a>
          <a href="/productos/{{$producto->id}}/borrar" class="btn btn-danger ">Eliminar</a>
        </td>
        @endcan
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div id="pieDePagina">
  @can('soloAdmin')
  <div class="pieVistasAdministradorIzquierdo">
    <a class="btn btn-dark" href="../administrador" type="submit">Atras </a>
  </div>
  @endcan
  @can('soloUsuario')
  <div class="pieVistasAdministradorIzquierdo">
    <a class="btn btn-dark" href="../" type="submit">Atras </a>
  </div>
  @endcan
  <div class="pieVistasAdministradorDerecho">
    <a class="btn btn-success" href="ventas" type="submit">Ventas </a>
  </div>
  <div class="pieVistasAdministradorDerecho">
    <a class="btn btn-success" href="vendedores">Vista Vendedores</a>
  </div>
  @can('soloAdmin')
  <div class="pieVistasAdministradorDerecho">
    <a class="btn btn-success" href="productos/create">Crear Producto</a>
  </div>
  @endcan
</div>
@endsection
