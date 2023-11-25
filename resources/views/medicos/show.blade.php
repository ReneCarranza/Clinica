@extends('layout.app')

@section('content')
    <h1>Detalles del Médico</h1>
    <p><strong>Nombre:</strong> {{ $medico->nombre }}</p>
    <p><strong>Apellido:</strong> {{ $medico->apellido }}</p>
    <p><strong>Especialidad:</strong> {{ $medico->especialidad }}</p>
    <p><strong>Número de Colegiado:</strong> {{ $medico->numero_colegiado }}</p>

    <a href="{{ route('medicos.index') }}" class="btn btn-primary">Volver al Listado</a>
</div>