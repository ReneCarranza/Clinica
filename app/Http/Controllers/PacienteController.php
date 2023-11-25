<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::paginate(5);
        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        // Lógica para almacenar un nuevo paciente
        // Ejemplo: Crear un nuevo paciente en la base de datos
        $paciente = new Paciente();
        $paciente->nombre = $request->input('nombre');
        $paciente->apellido = $request->input('apellido');
        $paciente->direccion = $request->input('direccion');
        $paciente->sexo = $request->input('sexo');
        $paciente->fecha_nacimiento = $request->input('fecha_nacimiento');
        $paciente->alergias = $request->input('alergias');
        $paciente->tipo_sangre = $request->input('tipo_sangre');
        $paciente->save();

        // Redireccionar a la lista de pacientes o a la página de detalles del paciente
        return redirect()->route('pacientes.index');
    }

    public function show($id)
    {
        // Lógica para mostrar los detalles de un paciente
        $paciente = Paciente::find($id);
        return view('pacientes.show', compact('paciente'));
    }

    public function edit($id)
    {
        // Lógica para mostrar el formulario de edición de un paciente
        $paciente = Paciente::find($id);
        return view('pacientes.edit', compact('paciente'));
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar los datos de un paciente
        $paciente = Paciente::find($id);
        $paciente->nombre = $request->input('nombre');
        $paciente->apellido = $request->input('apellido');
        $paciente->direccion = $request->input('direccion');
        $paciente->fecha_nacimiento = $request->input('fecha_nacimiento');
        $paciente->alergias = $request->input('alergias');
        $paciente->tipo_sangre = $request->input('tipo_sangre');
        $paciente->save();

        // Redireccionar a la lista de pacientes o a la página de detalles del paciente
        return redirect()->route('pacientes.index');
    }

    public function destroy($id)
    {
        // Lógica para eliminar un paciente
        $paciente = Paciente::find($id);
        $paciente->delete();

        // Redireccionar a la lista de pacientes
        return redirect()->route('pacientes.index');
    }
    
    // Agrega más funciones según tus necesidades
}