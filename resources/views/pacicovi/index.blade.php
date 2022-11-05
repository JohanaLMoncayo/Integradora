@extends('adminlte::page')

@section('title', 'PACIENTES ENFERMERIA')

@section('content_header')
    <h1>Listado de Pacientes</h1>
@stop

@section('content')
   <a href="pacicovis/create" class="btn btn-primary mb-3">CREAR</a>

<table id="pacicovis" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-success text-white">
        <tr>
            <th scope="col">Matricula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Status</th>
            <th scope="col">NSS</th>
            <th scope="col">Carrera</th>
            <th scope="col">Modalidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pacicovis as $pacicovi)
        <tr>
            <td>{{$pacicovi->id}}</td>
            <td>{{$pacicovi->nombre}}</td>
            <td>{{$pacicovi->apellido}}</td>
            <td>{{$pacicovi->carrera}}</td>
            <td>{{$pacicovi->fechaconsulta}}</td>
            <td>{{$pacicovi->estatus}}</td>
            <td>
            <form action="{{ route ('pacicovis.destroy',$pacicovi->id)}}" method="POST" class="formulario-eliminar">
                <a href="/pacicovis/{{ $pacicovi->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger " >Borrar</button>
                </form> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#pacicovis').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $('.formulario-eliminar').submit(function(e){
e.preventDefault();
Swal.fire({
  title: '¿Estas seguro?',
  text: "Tu no prodras revertir esta accion",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Borrar este elemento'
}).then((result) => {
  if (result.isConfirmed) {
   this.submit();
  }
})
    });
</script>
@stop