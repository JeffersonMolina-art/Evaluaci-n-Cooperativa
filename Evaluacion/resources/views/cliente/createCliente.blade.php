<x-layout>
    <x-slot name="title">
        Crear Cliente
    </x-slot>

    <h1>Crear Cliente</h1>
    <x-navCliente/>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label>
            idPersona
            <input name="Persona_idPersona" type="text">
        </label>
        @error('Persona_idPersona')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <button type="submit">Guardar</button>
    </form>
</x-layout>
