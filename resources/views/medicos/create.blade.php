@extends('layout.app')

@section('content')
    <h1>Nuevo Médico</h1>
    <form action="{{ route('medicos.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="especialidad">Especialidad</label>
            <input type="text" name="especialidad" id="especialidad" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="numero_colegiado">Número de Colegiado</label>
            <input type="text" name="numero_colegiado" id="numero_colegiado" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Médico</button>
    </form>
@endsection