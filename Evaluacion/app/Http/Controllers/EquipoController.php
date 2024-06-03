<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipoController extends Controller
{
    public function show()
    {
        $equipos = DB::table('equipo')->get();
        return view('equipo', ['equipos' => $equipos]);
    }
    public function create(){
        return view('equipo.createEquipo');
    }
    public function store(Request $request)
    {
        request()->validate([
            'Modelo' => ['required', 'string'],
            'EstadoEquipo' => ['required', 'string'],
            'Marca_idMarca' => ['required', 'string'],
            'Cliente_idCliente' => ['required', 'string']
        ]);
        $equipo = new Equipo;
        $equipo->Modelo = $request->input('Modelo');
        $equipo->EstadoEquipo = $request->input('EstadoEquipo');
        $equipo->Marca_idMarca= $request->input('Marca_idMarca');
        $equipo->Cliente_idCliente = $request->input('Cliente_idCliente');
        $equipo->save();

        return redirect()->route('equipos');
    }
    public function edit($id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('equipo.editEquip', compact('equipo'));
    }

    public function update(Request $request, $id)
    {
        $equipo = Equipo::findOrFail($id);
        request()->validate([
            'Modelo' => ['required', 'string'],
            'EstadoEquipo' => ['required', 'string'],
            'Marca_idMarca' => ['required', 'string'],
            'Cliente_idCliente' => ['required', 'string']
        ]);
        $equipo->Modelo = $request->input('Modelo');
        $equipo->EstadoEquipo = $request->input('EstadoEquipo');
        $equipo->Marca_idMarca= $request->input('Marca_idMarca');
        $equipo->Cliente_idCliente = $request->input('Cliente_idCliente');
        $equipo->save();

        return redirect()->route('equipos')->with('success', 'Equipo actualizada exitosamente');
    }
    public function destroy($id)
    {
        Equipo::destroy($id);
        return redirect()->route('equipos')->with('success', 'Equipo eliminada exitosamente');
    }
}
