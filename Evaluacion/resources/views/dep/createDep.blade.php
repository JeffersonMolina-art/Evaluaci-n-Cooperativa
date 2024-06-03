<x-layout>
    <x-slot name="title">
        Crear Departamento
    </x-slot>

    <h1>Crear Departamento</h1>
    <x-navDep/>

    <form action="{{ route('departamentos.store') }}" method="POST">
        @csrf
        <label>
            Descripcion
            <input name="Descricpion" type="text">
        </label>
        @error('Descricpion')
            <br>
            <small style="color:red"{{$message}}> </small>
        @enderror
        <button type="submit">Guardar</button>
    </form>
</x-layout>
