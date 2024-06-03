<x-layout>
    <x-slot name="title">
        Create-Equipo
    </x-slot>
    <h1>Crear Equipo</h1>
    <x-navEquipo/>
    <form action="{{ route('equipos.update', $equipo->idEquipo) }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            <input type="text" name="Modelo" id="Modelo" value="{{old('Modelo', $equipo->Modelo)}}">
        </label>

        @error('Modelo')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="date" name="EstadoEquipo" id="EstadoEquipo" value=" {{old('EstadoEquipo', $equipo->EstadoEquipo)}}">
        </label>
        @error('EstadoEquipo')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="Marca_idMarca" id="Marca_idMarca" value="{{old('Marca_idMarca', $equipo->Marca_idMarca)}} ">
        </label>
        @error('Marca_idMarca')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="Cliente_idCliente" id="Cliente_idCliente" value="{{old('Cliente_idCliente', $equipo->Cliente_idCliente)}} ">
        </label>
        @error('Cliente_idCliente')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <input type="submit" name="registre" id="buttonRegistre" value="Registrarse">
    </form>
</x-layout>


