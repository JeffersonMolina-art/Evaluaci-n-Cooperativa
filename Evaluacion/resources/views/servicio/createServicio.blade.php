<x-layout>
    <x-slot name="title">
        Create-Servicio
    </x-slot>
    <h1>Crear Servicio</h1>
    <x-navServicio/>
    <form action="{{ route('servicios.store') }}" method="POST">
        @csrf
        <label>
            <input type="date" name="FechaInicio" id="FechaInicio" placeholder="Fecha Inicio">
        </label>

        @error('FechaInicio')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="date" name="FechaFinalizacion" id="FechaFinalizacion" placeholder="Fecha Finalizacion ">
        </label>
        <label>
            <input type="text" name="Observaciones" id="Observaciones" placeholder=" Observaciones">
        </label>
        @error('Observaciones')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="EstadoServicio" id="EstadoServicio" placeholder="EstadoServicio ">
        </label>
        @error('EstadoServicio')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="Problema" id="Problema" placeholder="Problema ">
        </label>
        @error('Problema')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="number" name="Tecnico_idTecnico" id="Tecnico_idTecnico" placeholder="Tecnico_idTecnico ">
        </label>
        @error('Tecnico_idTecnico')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="number" name="Diagnostico_idDiagnostico" id="Diagnostico_idDiagnostico" placeholder="Diagnostico_idDiagnostico ">
        </label>
        @error('Diagnostico_idDiagnostico')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="number" name="TipoServicio_idTipoServicio" id="TipoServicio_idTipoServicio" placeholder="TipoServicio_idTipoServicio ">
        </label>
        @error('TipoServicio_idTipoServicio')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <input type="submit" name="registre" id="buttonRegistre" value="Registrarse">
    </form>
</x-layout>


