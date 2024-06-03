<x-layout>
    <x-slot name="title">
        Equipos
    </x-slot>
    <h1>Equipos</h1>

    <x-navEquipo/>

    <div class="forms-pregunt">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Modelo</th>
                <th>Estado Equipo</th>
                <th>Marca idMarca</th>
                <th>Cliente idCliente</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody class="equipos">
            @foreach($equipos as $equipo)
                <tr>
                    <th>{{ $equipo->idEquipo }}</th>
                    <th>{{ $equipo->Modelo }}</th>
                    <th>{{ $equipo->EstadoEquipo }}</th>
                    <th>{{ $equipo->Marca_idMarca }}</th>
                    <th>{{ $equipo->Cliente_idCliente }}</th>
                    <th>
                        <form action="{{ route('equipos.destroy', $equipo->idEquipo) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este Equipo?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color:red; color:white;">Delete</button>
                        </form>
                        <a href="{{ route('equipos.edit', $equipo->idEquipo) }}">
                            <input type="button" style="background-color: blue; color:white;" value="Edit">
                        </a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
