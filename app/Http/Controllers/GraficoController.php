<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class GraficoController extends Controller
{
    public function index()
    {
        $pacientes = DB::table('pacientes')->select('sexo', DB::raw('count(*) as total'))->groupBy('sexo')->get();

        $chartData = [];

        foreach ($pacientes as $paciente) {
            $chartData[] = [
                'name' => $paciente->sexo,
                'y' => $paciente->total,
            ];
        }

        return view('graficos', compact('chartData'));
    }
}