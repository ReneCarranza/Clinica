@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Paciente</h1>

    <form action="{{ route('pacientes.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
        </div>

        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="{{ old('apellido') }}">
        </div>

        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ old('direccion') }}">
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento') }}">
        </div>

        <div class="form-group">
            <label for="alergias">Alergias:</label>
            <input type="text" name="alergias" id="alergias" class="form-control" value="{{ old('alergias') }}">
        </div>

        <div class="form-group">
            <label for="tipo_sangre">Tipo de Sangre:</label>
            <input type="text" name="tipo_sangre" id="tipo_sangre" class="form-control" value="{{ old('tipo_sangre') }}">
        </div>

        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <select name="sexo" id="sexo" class="form-control">
                <option value="masculino" {{ old('sexo') == 'masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="femenino" {{ old('sexo') == 'femenino' ? 'selected' : '' }}>Femenino</option>
                <option value="otro" {{ old('sexo') == 'otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Paciente</button>
    </form>
</div>
@endsection