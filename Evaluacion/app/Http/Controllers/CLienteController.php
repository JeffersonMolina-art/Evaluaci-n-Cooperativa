<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CLienteController extends Controller
{
    public function show(){
        $clientes = DB::table('cliente')->get();

        return view('cliente', ['clientes' => $clientes]);
    }
    public function create(){
        return view('cliente.createCliente');
    }
    public function store(Request $request)
    {
        request()->validate([
            'Persona_idPersona' => 'required',
        ]);
        $cliente = new Cliente();
        $cliente->Persona_idPersona = $request->input('Persona_idPersona');
        $cliente->save();

        return redirect()->route('clientes');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.editCliente', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        request()->validate([
            'Persona_idPersona' => 'required',
        ]);
        $cliente->update([
            'Persona_idPersona' => $request->input('Persona_idPersona'),
        ]);

        return redirect()->route('clientes')->with('success', 'Cliente actualizado exitosamente');
    }
    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect()->route('clientes')->with('success', 'Cliente eliminada exitosamente');
    }
}
