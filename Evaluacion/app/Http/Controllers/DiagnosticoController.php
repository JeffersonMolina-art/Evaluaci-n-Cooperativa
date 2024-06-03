<?php

namespace App\Http\Controllers;

use App\Models\Diagnostico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagnosticoController extends Controller
{
    public function show(){
        $diagnosticos = DB::table('diagnostico')->get();

        return view('diagnostico', ['diagnosticos' => $diagnosticos]);
    }
    public function create(){
        return view('diagnostico.createDiagnostico');
    }
    public function store(Request $request)
    {
        request()->validate([
            'Descripcion' => ['required', 'string'],
            'FechaDiagnostico' => ['required', 'string'],
            'Tecnico_idTecnico' => ['required', 'string'],
            'Equipo_idEquipo' => ['required', 'string']
        ]);
        $diagnostico = new Diagnostico;
        $diagnostico->Descripcion = $request->input('Descripcion');
        $diagnostico->FechaDiagnostico = $request->input('FechaDiagnostico');
        $diagnostico->Tecnico_idTecnico= $request->input('Tecnico_idTecnico');
        $diagnostico->Equipo_idEquipo = $request->input('Equipo_idEquipo');
        $diagnostico->save();

        return redirect()->route('diagnosticos');
    }
    public function edit($id)
    {
        $diagnostico = Diagnostico::findOrFail($id);
        return view('diagnostico.editDiagnostico', compact('diagnostico'));
    }

    public function update(Request $request, $id)
    {
        $diagnostico = Diagnostico::findOrFail($id);
        $request->validate([
            'Descripcion' => ['required', 'string'],
            'FechaDiagnostico' => ['required', 'string'],
            'Tecnico_idTecnico' => ['required', 'string'],
            'Equipo_idEquipo' => ['required', 'string']
        ]);

        $diagnostico->Descripcion = $request->input('Descripcion');
        $diagnostico->FechaDiagnostico = $request->input('FechaDiagnostico');
        $diagnostico->Tecnico_idTecnico= $request->input('Tecnico_idTecnico');
        $diagnostico->Equipo_idEquipo = $request->input('Equipo_idEquipo');
        $diagnostico->save();

        return redirect()->route('diagnosticos')->with('success', 'Diagnostico actualizada exitosamente');
    }
    public function destroy($id)
    {
        Diagnostico::destroy($id);
        return redirect()->route('diagnosticos')->with('success', 'Diagnostico eliminada exitosamente');
    }

}
