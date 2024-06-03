<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    public function show(){
        $servicios = DB::table('servicio')->get();

        return view('servicio', ['servicios' => $servicios]);
    }
    public function create(){
        return view('servicio.createServicio');
    }
    public function store(Request $request)
    {
        request()->validate([
            'FechaInicio' => ['required', 'string'],
            'Observaciones' => ['required', 'string'],
            'EstadoServicio' => ['required', 'string'],
            'Problema' => ['required', 'string'],
            'Tecnico_idTecnico' => ['required', 'string'],
            'Diagnostico_idDiagnostico' => ['required', 'string'],
            'TipoServicio_idTipoServicio' => ['required', 'string']
        ]);
        $servicio = new Servicios;
        $servicio->FechaInicio = $request->input('FechaInicio');
        $servicio->FechaFinalizacion = $request->input('FechaFinalizacion');
        $servicio->Observaciones= $request->input('Observaciones');
        $servicio->EstadoServicio = $request->input('EstadoServicio');
        $servicio->Problema = $request->input('Problema');
        $servicio->Tecnico_idTecnico = $request->input('Tecnico_idTecnico');
        $servicio->Diagnostico_idDiagnostico = $request->input('Diagnostico_idDiagnostico');
        $servicio->TipoServicio_idTipoServicio = $request->input('TipoServicio_idTipoServicio');
        $servicio->save();

        return redirect()->route('servicios');
    }
    public function edit($id)
    {
        $servicio = Servicios::findOrFail($id);
        return view('servicio.editServicio', compact('servicio'));
    }

    public function update(Request $request, $id)
    {
        $servicio = Servicios::findOrFail($id);
        request()->validate([
            'FechaInicio' => ['required', 'string'],
            'Observaciones' => ['required', 'string'],
            'EstadoServicio' => ['required', 'string'],
            'Problema' => ['required', 'string'],
            'Tecnico_idTecnico' => ['required', 'string'],
            'Diagnostico_idDiagnostico' => ['required', 'string'],
            'TipoServicio_idTipoServicio' => ['required', 'string']
        ]);
        $servicio->FechaInicio = $request->input('FechaInicio');
        $servicio->FechaFinalizacion = $request->input('FechaFinalizacion');
        $servicio->Observaciones= $request->input('Observaciones');
        $servicio->EstadoServicio = $request->input('EstadoServicio');
        $servicio->Problema = $request->input('Problema');
        $servicio->Tecnico_idTecnico = $request->input('Tecnico_idTecnico');
        $servicio->Diagnostico_idDiagnostico = $request->input('Diagnostico_idDiagnostico');
        $servicio->TipoServicio_idTipoServicio = $request->input('TipoServicio_idTipoServicio');
        $servicio->save();

        return redirect()->route('servicios')->with('success', 'Servicios actualizada exitosamente');
    }
    public function destroy($id)
    {
        Servicios::destroy($id);
        return redirect()->route('servicios')->with('success', 'Servicios eliminada exitosamente');
    }

}
