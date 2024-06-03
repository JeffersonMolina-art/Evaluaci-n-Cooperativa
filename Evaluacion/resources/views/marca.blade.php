<x-layout>
    <x-slot name="title">
        Marca
    </x-slot>
    <h1>Marca</h1>
    <x-navMarca/>
    <div class="forms-pregunt">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>IDMarca</th>
                <th> Nombre Marca</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>
            </thead>
            <tbody class="clientes">
            @foreach($marcas as $marca)
                <tr>
                    <th>{{ $marca->idMarca }}</th>
                    <th>{{ $marca->NombreMarca }}</th>

                    <th>
                        <form action="{{ route('marcas.destroy', $marca->idMarca ) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta marca?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color:red; color:white;">Delete</button>
                        </form>
                    </th>
                    <th>
                        <a href="{{ route('marcas.edit', $marca->idMarca )}}">
                            <input type="button" style="background-color: blue; color:white;" value="Edit">
                        </a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
