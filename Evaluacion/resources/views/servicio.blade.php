<x-layout>
    <x-slot name="title">
        Servicios
    </x-slot>
    <h1>Servicios</h1>

    <x-navServicio/>

    <div class="forms-pregunt">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>FechaInicio</th>
                <th>FechaFinalizacion</th>
                <th>Observaciones</th>
                <th>EstadoServicio</th>
                <th>Problema</th>
                <th>Tecnico idTecnico</th>
                <th>Diagnostico idDiagnostico</th>
                <th>FechaDiagnostico</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody class="servicio">
            @foreach($servicios as $servicio)
                <tr>
                    <th>{{$servicio->idServicio}}</th>
                    <th>{{$servicio->FechaInicio }}</th>
                    <th>{{$servicio->FechaFinalizacion }}</th>
                    <th>{{$servicio->Observaciones }}</th>
                    <th>{{$servicio->EstadoServicio }}</th>
                    <th>{{$servicio->Problema }}</th>
                    <th>{{$servicio->Tecnico_idTecnico }}</th>
                    <th>{{$servicio->Diagnostico_idDiagnostico }}</th>
                    <th>{{$servicio->TipoServicio_idTipoServicio }}</th>
                    <th>
                        <form action="{{ route('servicios.destroy', $servicio->idServicio) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este servicio?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color:red; color:white;">Delete</button>
                        </form>
                        <a href="{{ route('servicios.edit',$servicio->idServicio)}}">
                            <input type="button" style="background-color: blue; color:white;" value="Edit">
                        </a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-layout>


