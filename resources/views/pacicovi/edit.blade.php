@extends('adminlte::page')

@section('title', 'PACIENTES ENFERMERIA')

@section('content_header')
    <h1>Editar Paciente</h1>
@stop

@section('content')
   <form action="/pacicovis/{{$pacicovi->id}}" method="POST" class="formulario-editar">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$pacicovi->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellidos</label>
    <input id="apellido" name="apellido" type="text" class="form-control" value="{{$pacicovi->apellido}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Carrera</label>
    <input id="carrera" name="carrera" type="text" class="form-control" value="{{$pacicovi->carrera}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha Consulta</label>
    <input id="fechaconsulta" name="fechaconsulta" type="date" class="form-control" value="{{$pacicovi->fechaconsulta}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estatus</label>
    <input id="estatus" name="estatus" type="text" class="form-control" value="{{$pacicovi->estatus}}">    
  </div>
  <a href="/pacicovis" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $('.formulario-editar').submit(function(e){
e.preventDefault();
Swal.fire({
  title: '¿Estas seguro que quieres editar este elemento?',
  icon: 'warning',
  showCancelButton: false,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, editar elemento'
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
  }
})
    });
</script>
@stop