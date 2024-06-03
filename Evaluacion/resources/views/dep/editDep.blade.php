<x-layout>
    <x-slot name="title">
        Crear Cliente
    </x-slot>

    <h1>Crear Cliente</h1>
    <x-navDep/>

    <form action="{{ route('clientes.store', $cliente->idCliente) }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Descripcion
            <input name="Persona_idPersona" type="text" value="{{old('Persona_idPersona', $cliente->Persona_idPersona)}}">
        </label>
        @error('Descricpion')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <button type="submit">Guardar</button>
    </form>
</x-layout>
