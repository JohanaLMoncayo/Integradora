@extends('adminlte::page')

@section('title', 'PACIENTES ENFERMERIA')

@section('content_header')
   <h1>Registrar Paciente</h1>
@stop

@section('content')
    
<form action="/pacicovis" method="POST" class="formulario-guardar">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Matricula</label>
    <input id="matricula" name="matricula" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estatus</label>
    <input id="estatus" name="estatus" type="estatus" class="form-control" tabindex="1">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Apellidos</label>
    <input id="apellido" name="apellido" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Numero de Seguro Social</label>
    <input id="nss" name="nss" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Carrera</label>
    <input id="carrera" name="carrera" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Modalidad</label>
    <input id="modalidad" name="modalidad" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de nacimiento</label>
    <input id="fechaconsulta" name="fechaconsulta" type="date" class="form-control" tabindex="1">    
  </div>
  <a href="/pacicovi" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary " tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $('.formulario-guardar').submit(function(e){

Swal.fire({
  position: 'top-center',
  icon: 'success',
  title: 'Se ha guardado correctamente',
  showConfirmButton: false,
  timer: 2000
})

    });
</script>
@stop