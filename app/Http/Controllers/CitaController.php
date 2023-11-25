<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Paciente;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Cita;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::paginate(5);
        return view('citas.index', compact('citas'));
    }

    public function generatePDF($id)
    {
        $cita = Cita::find($id);

        if (!$cita) {
            abort(404); // Manejo de cita no encontrada
        }

         // Configura el tamaño de página A2
        $pdf = PDF::setPaper([420, 220], 'portrait');

        $pdf = PDF::loadView('citas.pdf', compact('cita'));

        return $pdf->stream('cita.pdf');
    }


    public function create()
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();

        return view('citas.create', compact('pacientes', 'medicos'));
    }

    public function store(Request $request)
    {
        // Lógica para almacenar una nueva cita
        // Ejemplo: Crear una nueva cita en la base de datos
        $cita = new Cita();
        $cita->paciente_id = $request->input('paciente_id');
        $cita->medico_id = $request->input('medico_id');
        $cita->fecha = $request->input('fecha');
        $cita->comentario = $request->input('comentario');
        $cita->save();

        // Redireccionar a la lista de citas o a la página de detalles de la cita
        return redirect()->route('citas.index');
    }

    public function show($id)
    {
        // Lógica para mostrar los detalles de una cita
        $cita = Cita::find($id);
        return view('citas.show', compact('cita'));
    }
    
    public function edit($id)
    {
        $cita = Cita::find($id);
        $pacientes = Paciente::all();
        $medicos = Medico::all();

        return view('citas.edit', compact('cita', 'pacientes', 'medicos'));
    }


    public function update(Request $request, $id)
    {
        // Lógica para actualizar los datos de una cita
        $cita = Cita::find($id);
        $cita->paciente_id = $request->input('paciente_id');
        $cita->medico_id = $request->input('medico_id');
        $cita->fecha = $request->input('fecha');
        $cita->comentario = $request->input('comentario');
        $cita->save();

        // Redireccionar a la lista de citas o a la página de detalles de la cita
        return redirect()->route('citas.index');
    }

    public function destroy($id)
    {
        // Lógica para eliminar una cita
        $cita = Cita::find($id);
        $cita->delete();

        // Redireccionar a la lista de citas
        return redirect()->route('citas.index');
    }

    // Agrega más funciones según tus necesidades
}