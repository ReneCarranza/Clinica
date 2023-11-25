@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Paciente</h1>

    <form action="{{ route('pacientes.update', ['paciente' => $paciente->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $paciente->nombre }}">
        </div>

        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="{{ $paciente->apellido }}">
        </div>

        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $paciente->direccion }}">
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ $paciente->fecha_nacimiento }}">
        </div>

        <div class="form-group">
            <label for="alergias">Alergias:</label>
            <input type="text" name="alergias" id="alergias" class="form-control" value="{{ $paciente->alergias }}">
        </div>

        <div class="form-group">
            <label for="tipo_sangre">Tipo de Sangre:</label>
            <input type="text" name="tipo_sangre" id="tipo_sangre" class="form-control" value="{{ $paciente->tipo_sangre }}">
        </div>

        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <select name="sexo" id="sexo" class="form-control">
                <option value="masculino" {{ $paciente->sexo == 'masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="femenino" {{ $paciente->sexo == 'femenino' ? 'selected' : '' }}>Femenino</option>
                <option value="otro" {{ $paciente->sexo == 'otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Paciente</button>
    </form>
</div>
@endsection