@extends('layout.app')

@section('content')

<style>
    body {
        background-image: url('{{ asset('clinica2.jpg') }}');
        background-size: cover;
        background-position: center;
    }

    h1 {
        font-family: 'Times New Roman', sans-serif;
    }

    .card {
        background-color: #87CEFA;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
    }

    .pagination {
         margin-top: 20px !important;
    }

    .pagination li {
        margin-right: 10px !important;
    }

    .pagination li a,
    .pagination li span {
         display: inline-block;
         padding: 8px 12px;
        color: #fff;
        background-color: #008080 !important;
        border: 1px solid #007bff !important;
        border-radius: 5px;
        text-decoration: none;
    }

    .pagination li.active a,
    .pagination li.active span {
         background-color: #0056b3 !important;
        border-color: #0056b3 !important;
    }

    .pagination li.disabled span {
        color: #6c757d !important;
        background-color: #e9ecef !important;
        border-color: #dee2e6 !important;
    }

</style>

<div class="container">
    <h1>Listado de Pacientes</h1>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <a href="{{ route('pacientes.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>Nuevo Paciente</a>

    <!-- Botón de Estadística -->
    <a href="{{ route('graficos') }}" class="btn btn-success"><i class="fas fa-chart-pie"></i>Estadística</a>

    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Sexo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Alergias</th>
                    <th>Tipo de Sangre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                    <tr>
                        <td>{{ $paciente->nombre }}</td>
                        <td>{{ $paciente->apellido }}</td>
                        <td>{{ $paciente->direccion }}</td>
                        <td>{{ $paciente->sexo }}</td>
                        <td>{{ $paciente->fecha_nacimiento }}</td>
                        <td>{{ $paciente->alergias }}</td>
                        <td>{{ $paciente->tipo_sangre }}</td>
                        <td>
                            <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="{{ route('pacientes.show', $paciente->id) }}" class="btn btn-sm btn-info">Detalles</a>

                            <!-- Botón de Eliminación -->
                            <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar a este paciente?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <script src=" https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
    </div>
    <div class="d-flex justify-content-center">
        {{ $pacientes->render() }}
    </div>
</div>
@endsection