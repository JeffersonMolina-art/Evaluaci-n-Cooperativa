<x-layout>
    <x-slot name="title">
        Edit-Servicio
    </x-slot>
    <h1>Modificar Servicio</h1>
    <x-navServicio/>
    <form action="{{ route('servicios.update', $servicio->idServicio) }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            <input type="text" name="FechaInicio" id="FechaInicio" value="{{old('FechaInicio', $servicio->FechaInicio)}}">
        </label>

        @error('FechaInicio')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="FechaFinalizacion" id="FechaFinalizacion" value="{{old('FechaFinalizacion', $servicio->FechaFinalizacion)}}">
        </label>
        <label>
            <input type="text" name="Observaciones" id="Observaciones" value=" {{old('Observaciones', $servicio->Observaciones)}}">
        </label>
        @error('Observaciones')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="EstadoServicio" id="EstadoServicio" value="{{old('EstadoServicio', $servicio->EstadoServicio)}} ">
        </label>
        @error('EstadoServicio')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="Problema" id="Problema" value="{{old('Problema', $servicio->Problema)}} ">
        </label>
        @error('Problema')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="Tecnico_idTecnico" id="Tecnico_idTecnico" value="{{old('Tecnico_idTecnico', $servicio->Tecnico_idTecnico)}} ">
        </label>
        @error('Tecnico_idTecnico')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="Diagnostico_idDiagnostico" id="Diagnostico_idDiagnostico" value="{{old('Diagnostico_idDiagnostico', $servicio->Diagnostico_idDiagnostico)}} ">
        </label>
        @error('Diagnostico_idDiagnostico')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <label>
            <input type="text" name="TipoServicio_idTipoServicio" id="TipoServicio_idTipoServicio" value="{{old('TipoServicio_idTipoServicio', $servicio->TipoServicio_idTipoServicio)}} ">
        </label>
        @error('TipoServicio_idTipoServicio')
        <br>
        <small style="color:red"{{$message}}> </small>
        @enderror
        <input type="submit" name="registre" id="buttonRegistre" value="Registrarse">
    </form>
</x-layout>


