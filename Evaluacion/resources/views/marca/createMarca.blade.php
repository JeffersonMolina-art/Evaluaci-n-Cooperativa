<x-layout>
    <x-slot name="title">
        Crear Marca
    </x-slot>

    <h1>Crear Marca</h1>
    <x-navMarca/>

    <form action="{{ route('marcas.store') }}" method="POST">
        @csrf
        <label>
            Nombre Marca
            <input name="NombreMarca" type="text">
        </label>
        @error('NombreMarca')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <button type="submit">Guardar</button>
    </form>
</x-layout>
