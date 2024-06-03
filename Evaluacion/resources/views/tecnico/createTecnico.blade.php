<x-layout>
    <x-slot name="title">
        Crear Técnico
    </x-slot>

    <h1>Crear Técnico</h1>
    <x-navTecnico/>

    <form action="{{ route('tecnicos.store') }}" method="POST">
        @csrf
        <label>
            IdPersona
            <input name="Persona_idPersona" type="text">
        </label>
        @error('Persona_idPersona')
        <br>
        <small style="color:red">{{ $message }}</small>
        @enderror
        <button type="submit">Guardar</button>
    </form>
</x-layout>
