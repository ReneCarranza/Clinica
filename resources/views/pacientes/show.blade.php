@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="text-align: center; margin-bottom: 20px; font-family: 'Times New Roman', sans-serif;">Detalles del Paciente</h1>

    <div class="card">
        <div class="card-body">
            <h2 style="font-size: 24px; margin-bottom: 20px;">Información del Paciente</h2>
            <ul style="list-style-type: none; padding: 0;">
                <li style="margin-bottom: 10px;">
                    <strong style="color: #007bff;">Nombre:</strong>
                    <span>{{ $paciente->nombre }}</span>
                </li>
                <li style="margin-bottom: 10px;">
                    <strong style="color: #007bff;">Apellido:</strong>
                    <span>{{ $paciente->apellido }}</span>
                </li>
                <li style="margin-bottom: 10px;">
                    <strong style="color: #007bff;">Dirección:</strong>
                    <span>{{ $paciente->direccion }}</span>
                </li>
                <li style="margin-bottom: 10px;">
                    <strong style="color: #007bff;">Fecha de Nacimiento:</strong>
                    <span>{{ $paciente->fecha_nacimiento }}</span>
                </li>
                <li style="margin-bottom: 10px;">
                    <strong style="color: #007bff;">Alergias:</strong>
                    <span>{{ $paciente->alergias }}</span>
                </li>
                <li style="margin-bottom: 10px;">
                    <strong style="color: #007bff;">Tipo de Sangre:</strong>
                    <span>{{ $paciente->tipo_sangre }}</span>
                </li>
            </ul>
        </div>
    </div>
    <a href="{{ route('pacientes.index') }}" class="btn btn-primary" style="margin-bottom: 20px;">Volver al Listado</a>
</div>
@endsection
