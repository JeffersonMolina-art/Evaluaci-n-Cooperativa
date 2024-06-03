<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TecnicoController extends Controller
{
    public function show(){
        $tecnicos = DB::table('tecnico')->get();

        return view('tecnico', ['tecnicos' => $tecnicos]);
    }
    public function create(){
        return view('tecnico.createTecnico');
    }
    public function store(Request $request)
    {
        request()->validate([
            'Persona_idPersona' => 'required',
        ]);
        $tecnico = new Empleado();
        $tecnico->Persona_idPersona = $request->input('Persona_idPersona');
        $tecnico->save();

        return redirect()->route('tecnicos');
    }

    public function edit($id)
    {
        $tecnico = Empleado::findOrFail($id);
        return view('tecnico.editTecnico', compact('tecnico'));
    }

    public function update(Request $request, $id)
    {
        $tecnico = Empleado::findOrFail($id);
        request()->validate([
            'Persona_idPersona' => 'required',
        ]);
        $tecnico->update([
            'Persona_idPersona' => $request->input('Persona_idPersona'),
        ]);

        return redirect()->route('tecnicos')->with('success', 'Tcenico actualizado exitosamente');
    }
    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect()->route('tecnicos')->with('success', 'Tecnico eliminada exitosamente');
    }
}
