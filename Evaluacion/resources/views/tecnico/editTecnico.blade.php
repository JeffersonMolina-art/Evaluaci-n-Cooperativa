<x-layout>
    <x-slot name="title">
        Modificar Tecnico
    </x-slot>

    <h1>Modificar Tecnico</h1>
    <x-navTecnico/>

    <form action="{{ route('tecnicos.update', $tecnico->idTecnico) }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            IdPersona
            <input name="Persona_idPersona" type="text" value="{{old('Persona_idPersona',$tecnico->Persona_idPersona)}}">
        </label>
        @error('Persona_idPersona')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <button type="submit">Guardar</button>
    </form>
</x-layout>
