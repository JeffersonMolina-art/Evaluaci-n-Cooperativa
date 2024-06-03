<x-layout>
    <x-slot name="title">
        Create-Personas
    </x-slot>
    <h1>Crear Personas</h1>
    <x-navPerson/>
    <form action="{{ route('persona.store') }}" method="POST">
        @csrf
        <label>
            <input type="text" name="firstName" id="firstName" placeholder="Primer Nombre">
        </label>

        @error('firstName')
            <br>
            <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="secondName" placeholder="Segundo nombre">
        </label>
        <label>
            <input type="text" name="firstLastName" id="firstLastName" placeholder="Primer apellido">
        </label>
        @error('firstLastName')
            <br>
            <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="secondLastName" id="secondLastName" placeholder="Segundo apellido">
        </label><br>
        <label>
            <input type="text" name="genero" id="genero" placeholder="Genero">
        </label>
        @error('genero')
            <br>
            <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="number" name="phone" id="phone" placeholder="Numero de telefono">
        </label>
        @error('phone')
            <br>
            <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="dpi" id="dpi" placeholder="DPI">
        </label>
            @error('dpi')
            <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="nit" id="nit" placeholder="NIT">
        </label>
        @error('nit')
            <br>
            <small style="color:red"{{$message}}> </small>
        @enderror
        <br>
        <label>
            <input type="text" name="Direccion_idDireccion" id="Direccion_idDireccion" placeholder="IdDireccion">
        </label>
        @error('Direccion_idDireccion')
            <br>
            <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="Municipio_idMunicipio" id="Municipio_idMunicipio" placeholder="IdMunicipio">
        </label>
        <br>
        @error('Municipio_idMunicipio')
            <br>
            <small style="color:red"{{$message}}> </small>
        @enderror
        <input type="submit" name="registre" id="buttonRegistre" value="Registrarse">
    </form>


</x-layout>


