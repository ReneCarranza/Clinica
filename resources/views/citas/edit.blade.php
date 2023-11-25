@extends('layout.app')

@section('content')
    <h1>Editar Cita</h1>
    <form action="{{ route('citas.update', ['cita' => $cita->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select name="paciente_id" id="paciente_id" class="form-control">
                <option value="">Selecciona un paciente</option>
                @foreach ($pacientes as $paciente)
                    <option value="{{ $paciente->id }}" {{ $cita->paciente_id == $paciente->id ? 'selected' : '' }}>
                        {{ $paciente->nombre }} {{ $paciente->apellido }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="medico_id">Médico</label>
            <select name="medico_id" id="medico_id" class="form-control">
                <option value="">Selecciona un médico</option>
                @foreach ($medicos as $medico)
                    <option value="{{ $medico->id }}" {{ $cita->medico_id == $medico->id ? 'selected' : '' }}>
                        {{ $medico->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{ $cita->fecha }}">
        </div>

        <div class="form-group">
            <label for="comentario">Comentario</label>
            <textarea name="comentario" id="comentario" class="form-control" rows="3">{{ $cita->comentario }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Cita</button>
    </form>
</div>
@endsection

