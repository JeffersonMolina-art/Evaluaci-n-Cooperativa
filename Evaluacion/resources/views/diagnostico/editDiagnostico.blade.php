<x-layout>
    <x-slot name="title">
        Create-Diagnostico
    </x-slot>
    <h1>Crear Diagnostico</h1>
    <x-navPerson/>
    <form action="{{ route('diagnosticos.update', $diagnostico->idDiagnostico) }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            <input type="text" name="Descripcion" id="firstName" Value="{{old('Descripcion', $diagnostico->Descripcion)}}">
        </label>

        @error('Descripcion')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="date" name="FechaDiagnostico" id="FechaDiagnostico" Value="{{old('FechaDiagnostico', $diagnostico->FechaDiagnostico)}}">
        </label>
        @error('FechaDiagnostico')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="number" name="Tecnico_idTecnico" id="Tecnico_idTecnico" Value="{{old('Tecnico_idTecnico', $diagnostico->Tecnico_idTecnico)}}">
        </label>
        @error('Tecnico_idTecnico')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="number" name="Equipo_idEquipo" id="Equipo_idEquipo" Value="{{old('Equipo_idEquipo', $diagnostico->Equipo_idEquipo)}}">
        </label>
        @error('Equipo_idEquipo')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <input type="submit" name="registre" id="buttonRegistre" value="Registrarse">
    </form>


</x-layout>


