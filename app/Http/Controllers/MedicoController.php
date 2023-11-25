<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::paginate(5);
        return view('medicos.index', compact('medicos'));
    }

    public function create()
    {
        return view('medicos.create');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'especialidad' => 'required',
            'numero_colegiado' => 'required|unique:medicos',
        ]);

        // Crear un nuevo médico
        Medico::create($request->all());

        return redirect()->route('medicos.index')
            ->with('success', 'Médico creado exitosamente');
    }

    public function show($id)
    {
        $medico = Medico::find($id);
        return view('medicos.show', compact('medico'));
    }

    public function edit($id)
    {
        $medico = Medico::find($id);
        return view('medicos.edit', compact('medico'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'especialidad' => 'required',
            'numero_colegiado' => 'required|unique:medicos,numero_colegiado,' . $id,
        ]);

        // Actualizar los datos del médico
        Medico::find($id)->update($request->all());

        return redirect()->route('medicos.index')
            ->with('success', 'Médico actualizado exitosamente');
    }

    public function destroy($id)
    {
        // Eliminar un médico
        Medico::find($id)->delete();

        return redirect()->route('medicos.index')
            ->with('success', 'Médico eliminado exitosamente');
    }

    // Agrega más funciones según tus necesidades
}