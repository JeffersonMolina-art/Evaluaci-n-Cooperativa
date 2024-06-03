<x-layout>
    <x-slot name="title">
        Modificar Cliente
    </x-slot>

    <h1>Modificar Cliente</h1>
    <x-navCliente/>

    <form action="{{ route('clientes.update',$cliente->idCliente) }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            idPersona
            <input name="Persona_idPersona" type="text" value="{{old('Persona_idPersona', $cliente->Persona_idPersona)}}">
        </label>
        @error('Persona_idPersona')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <button type="submit">Guardar</button>
    </form>
</x-layout>
