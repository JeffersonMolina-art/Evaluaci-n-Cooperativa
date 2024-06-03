<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarcaController extends Controller
{
    public function show(){
        $marcas = DB::table('marca')->get();

        return view('marca', ['marcas' => $marcas]);
    }
    public function create(){
        return view('marca.createMarca');
    }
    public function store(Request $request)
    {
        request()->validate([
            'NombreMarca' => 'required',
        ]);
        $marca = new Marca();
        $marca->NombreMarca = $request->input('NombreMarca');
        $marca->save();

        return redirect()->route('marcas');
    }

    public function edit($id)
    {
        $marca = Marca::findOrFail($id);
        return view('marca.editMarca', compact('marca'));
    }

    public function update(Request $request, $id)
    {
        $marca = Marca::findOrFail($id);
        request()->validate([
            'NombreMarca' => 'required',
        ]);
        $marca->update([
            'NombreMarca' => $request->input('NombreMarca'),
        ]);

        return redirect()->route('marcas')->with('success', 'Marca actualizado exitosamente');
    }
    public function destroy($id)
    {
        Marca::destroy($id);
        return redirect()->route('marcas')->with('success', 'Marca eliminada exitosamente');
    }
}
