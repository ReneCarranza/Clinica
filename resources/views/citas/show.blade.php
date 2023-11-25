@extends('layout.app')

@section('content')
<div class="container">
    <h1 style="text-align: center; margin-bottom: 20px; font-family: 'Times New Roman', sans-serif;">Detalles de la Cita</h1>

    <div class="card">
        <div class="card-body">
            <h2 style="font-size: 24px; margin-bottom: 20px;">Información de la Cita</h2>
            <ul style="list-style-type: none; padding: 0;">
                <li style="margin-bottom: 10px;">
                    <strong style="color: #007bff;">Paciente:</strong>
                    <span>{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</span>
                </li>
                <li style="margin-bottom: 10px;">
                    <strong style="color: #007bff;">Médico:</strong>
                    <span>{{ $cita->medico->nombre }}</span>
                </li>
                <li style="margin-bottom: 10px;">
                    <strong style="color: #007bff;">Fecha:</strong>
                    <span>{{ $cita->fecha }}</span>
                </li>
                <li style="margin-bottom: 10px;">
                    <strong style="color: #007bff;">Comentario:</strong>
                    <span>{{ $cita->comentario }}</span>
                </li>
            </ul>
        </div>
    </div>
    <a href="{{ route('citas.index') }}" class="btn btn-primary" style="margin-bottom: 20px;">Volver al Listado</a>
</div>
@endsection
