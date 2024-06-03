<?php

namespace App\Http\Controllers;
use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DepaController extends Controller
{
    public function getDepartamentos(){
        $departamentos = DB::table('departamento')->get();

        return view('departamento', ['departamentos' => $departamentos]);
    }
    public function create(){
        return view('dep.createDep');
    }
    public function store(Request $request)
    {
        request()->validate([
            'Descricpion' => 'required',
        ]);
        $departamento = new Departamento();
        $departamento->Descricpion = $request->input('Descricpion');
        $departamento->save();

        return redirect()->route('departamentos');
    }

    public function edit($id)
    {
        $departamento = Departamento::findOrFail($id);
        return view('dep.editDep', compact('departamento'));
    }

    public function update(Request $request, $id)
    {
        $departamento = Departamento::findOrFail($id);
        $request->validate([
            'Descricpion' => 'required|string',
        ]);

        $departamento->Descricpion = $request->input('Descricpion');
        $departamento->save();

        return redirect()->route('departamentos')->with('success', 'Departamento actualizado exitosamente');
    }
    public function destroy($id)
    {
        Departamento::destroy($id);
        return redirect()->route('departamentos')->with('success', 'Departamento eliminada exitosamente');
    }
}
