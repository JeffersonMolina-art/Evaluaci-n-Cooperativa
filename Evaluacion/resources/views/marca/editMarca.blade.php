<x-layout>
    <x-slot name="title">
        Modificar Marca
    </x-slot>

    <h1>Modificar Marca</h1>
    <x-navMarca/>

    <form action="{{ route('marcas.update', $marca->idMarca) }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Nombre Marca
            <input name="NombreMarca" type="text" value="{{old('NombreMarca', $marca->NombreMarca)}}">
        </label>
        @error('NombreMarca')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <button type="submit">Guardar</button>
    </form>
</x-layout>
