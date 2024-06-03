<?php

namespace App\Http\Controllers;
use App\Models\Departamento;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{
    public function getPersonas(){
        $personas = DB::table('persona')->get();

        return view('persona', ['personas' => $personas]);
    }
    public function create(){
        return view('person.createPerson');
    }
    public function store(Request $request)
    {
        request()->validate([
            'firstName' => ['required', 'string'],
            'firstLastName' => ['required', 'string'],
            'genero' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'dpi' => ['required', 'string'],
            'nit' => ['required', 'string'],
            'Direccion_idDireccion' => ['required', 'string'],
            'Municipio_idMunicipio' => ['required', 'string']
        ]);
        $persona = new Persona();
        $persona->PrimerNombre = $request->input('firstName');
        $persona->SegundoNombre = $request->input('secondName');
        $persona->PrimerApellido= $request->input('firstLastName');
        $persona->SegundoApellido = $request->input('secondLastName');
        $persona->Genero = $request->input('genero');
        $persona->Telefono = $request->input('phone');
        $persona->DPI = $request->input('dpi');
        $persona->NIT = $request->input('nit');
        $persona->Direccion_idDireccion = $request->input('Direccion_idDireccion');
        $persona->Municipio_idMunicipio = $request->input('Municipio_idMunicipio');
        $persona->save();

        return redirect()->route('persona');
    }
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('person.modifPerson', compact('persona'));
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $request->validate([
            'firstName' => ['required', 'string'],
            'firstLastName' => ['required', 'string'],
            'genero' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'dpi' => ['required', 'string'],
            'nit' => ['required', 'string'],
            'Direccion_idDireccion' => ['required', 'string'],
            'Municipio_idMunicipio' => ['required', 'string']
        ]);

        $persona->PrimerNombre = $request->input('firstName');
        $persona->SegundoNombre = $request->input('secondName');
        $persona->PrimerApellido = $request->input('firstLastName');
        $persona->SegundoApellido = $request->input('secondLastName');
        $persona->Genero = $request->input('genero');
        $persona->Telefono = $request->input('phone');
        $persona->DPI = $request->input('dpi');
        $persona->NIT = $request->input('nit');
        $persona->Direccion_idDireccion = $request->input('Direccion_idDireccion');
        $persona->Municipio_idMunicipio = $request->input('Municipio_idMunicipio');
        $persona->save();

        return redirect()->route('persona')->with('success', 'Persona actualizada exitosamente');
    }
    public function destroy($id)
    {
        Persona::destroy($id);
        return redirect()->route('persona')->with('success', 'Persona eliminada exitosamente');
    }


}
