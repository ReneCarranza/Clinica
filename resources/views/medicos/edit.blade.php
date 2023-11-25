@extends('layout.app')

@section('content')
    <h1>Editar Médico</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('medicos.update', $medico->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $medico->nombre }}" required>
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" value="{{ $medico->apellido }}" required>
                </div>

                <div class="form-group">
                    <label for="especialidad">Especialidad</label>
                    <input type="text" name="especialidad" id="especialidad" class="form-control" value="{{ $medico->especialidad }}" required>
                </div>

                <div class="form-group">
                    <label for="numero_colegiado">Número de Colegiado</label>
                    <input type="text" name="numero_colegiado" id="numero_colegiado" class="form-control" value="{{ $medico->numero_colegiado }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>

            <br>

            <a href="{{ route('medicos.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
@endsection
