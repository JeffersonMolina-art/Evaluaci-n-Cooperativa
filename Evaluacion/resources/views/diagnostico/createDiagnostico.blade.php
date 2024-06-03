<x-layout>
    <x-slot name="title">
        Create-Diagnostico
    </x-slot>
    <h1>Crear Diagnostico</h1>
    <x-navDiag/>
    <form action="{{ route('diagnosticos.store') }}" method="POST">
        @csrf
        <label>
            <input type="text" name="Descripcion" id="firstName" placeholder="Descripcion">
        </label>

        @error('Descripcion')
            <br>
            <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="date" name="FechaDiagnostico" id="FechaDiagnostico" placeholder="Fecha Diagnostico">
        </label>
        @error('FechaDiagnostico')
            <br>
            <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="number" name="Tecnico_idTecnico" id="Tecnico_idTecnico" placeholder="Tecnico idTecnico">
        </label>
        @error('Tecnico_idTecnico')
            <br>
            <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="number" name="Equipo_idEquipo" id="Equipo_idEquipo" placeholder="Equipo idEquipo">
        </label>
        @error('Equipo_idEquipo')
            <br>
            <small style="color:red"{{$message}}> </small>
        @enderror
        <input type="submit" name="registre" id="buttonRegistre" value="Registrarse">
    </form>


</x-layout>


