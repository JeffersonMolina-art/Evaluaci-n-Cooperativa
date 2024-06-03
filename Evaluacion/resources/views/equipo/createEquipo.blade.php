<x-layout>
    <x-slot name="title">
        Create-Equipo
    </x-slot>
    <h1>Crear Equipo</h1>
    <x-navEquipo/>
    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf
        <label>
            <input type="text" name="Modelo" id="Modelo" placeholder="Modelo">
        </label>

        @error('Modelo')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="EstadoEquipo" id="EstadoEquipo" placeholder="Estado Equipo">
        </label>
        @error('EstadoEquipo')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="number" name="Marca_idMarca" id="Marca_idMarca" placeholder="Marca idMarca">
        </label>
        @error('Marca_idMarca')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="number" name="Cliente_idCliente" id="Cliente_idCliente" placeholder="Cliente idCliente ">
        </label>
        @error('Cliente_idCliente')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <input type="submit" name="registre" id="buttonRegistre" value="Registrarse">
    </form>
</x-layout>


