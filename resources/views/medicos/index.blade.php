<!-- resources/views/medicos/index.blade.php -->

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
            background-color: #87CEFA; /* Color de fondo del card */
            border-radius: 5px; /* Bordes redondeados */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra */
            padding: 20px; /* Espaciado interno del card */
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
    <h1>Listado de Médicos</h1>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <a href="{{ route('medicos.create') }}" class="btn btn-primary"><i class= "fas fa-plus-circle"></i>Nuevo Médico</a>
    <div class="card">
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Especialidad</th>
                <th>Número de Colegiado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicos as $medico)
                <tr>
                    <td>{{ $medico->nombre }}</td>
                    <td>{{ $medico->apellido }}</td>
                    <td>{{ $medico->especialidad }}</td>
                    <td>{{ $medico->numero_colegiado }}</td>
                    <td>
                        <a href="{{ route('medicos.edit', $medico->id) }}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="{{ route('medicos.show', $medico->id) }}" class="btn btn-sm btn-info">Detalles</a>
                        <form action="{{ route('medicos.destroy', $medico->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este médico?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-center">
    {{ $medicos->render() }}
</div>
@endsection