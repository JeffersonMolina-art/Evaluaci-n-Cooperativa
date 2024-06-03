<x-layout>
    <x-slot name="title">
        Modificar Personas
    </x-slot>
    <h1>Modificar Personas</h1>
    <x-navPerson/>
    <form action="{{ route('persona.update', $persona->idPersona) }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            <input type="text" name="firstName" id="firstName" value="{{ old('firstName', $persona->PrimerNombre) }}">
        </label>
        @error('firstName')
        <br>
        <small style="color:red">{{ $message }}</small>
        @enderror
        <label>
            <input type="text" name="secondName" id="secondName" value="{{ old('secondName', $persona->SegundoNombre) }}" placeholder="Segundo nombre">
        </label>
        <label>
            <input type="text" name="firstLastName" id="firstLastName" value="{{ old('firstLastName', $persona->PrimerApellido) }}" placeholder="Primer apellido">
        </label>
        @error('firstLastName')
        <br>
        <small style="color:red">{{ $message }}</small>
        @enderror
        <label>
            <input type="text" name="secondLastName" id="secondLastName" value="{{ old('secondLastName', $persona->SegundoApellido) }}" placeholder="Segundo apellido">
        </label><br>
        <label>
            <input type="text" name="genero" id="genero" value="{{ old('genero', $persona->Genero) }}" placeholder="Genero">
        </label>
        @error('genero')
        <br>
        <small style="color:red">{{ $message }}</small>
        @enderror
        <label>
            <input type="number" name="phone" id="phone" value="{{ old('phone', $persona->Telefono) }}" placeholder="Numero de telefono">
        </label>
        @error('phone')
        <br>
        <small style="color:red">{{ $message }}</small>
        @enderror
        <label>
            <input type="text" name="dpi" id="dpi" value="{{ old('dpi', $persona->DPI) }}" placeholder="DPI">
        </label>
        @error('dpi')
        <br>
        <small style="color:red">{{ $message }}</small>
        @enderror
        <label>
            <input type="text" name="nit" id="nit" value="{{ old('nit', $persona->NIT) }}" placeholder="NIT">
        </label>
        @error('nit')
        <br>
        <small style="color:red">{{ $message }}</small>
        @enderror
        <br>
        <label>
            <input type="text" name="Direccion_idDireccion" id="Direccion_idDireccion" value="{{ old('Direccion_idDireccion', $persona->Direccion_idDireccion) }}" placeholder="IdDireccion">
        </label>
        @error('Direccion_idDireccion')
        <br>
        <small style="color:red">{{ $message }}</small>
        @enderror
        <label>
            <input type="text" name="Municipio_idMunicipio" id="Municipio_idMunicipio" value="{{ old('Municipio_idMunicipio', $persona->Municipio_idMunicipio) }}" placeholder="IdMunicipio">
        </label>
        <br>
        @error('Municipio_idMunicipio')
        <br>
        <small style="color:red">{{ $message }}</small>
        @enderror
        <input type="submit" name="registre" id="buttonRegistre" value="Actualizar">
    </form>
</x-layout>
