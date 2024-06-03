<x-layout>
    <x-slot name="title">
        Cliente
    </x-slot>
    <h1>Cliente</h1>
    <x-navCliente/>
    <div class="forms-pregunt">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>IdCliente</th>
                <th> IdPersona</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>
            </thead>
            <tbody class="clientes">
            @foreach($clientes as $cliente)
                <tr>
                    <th>{{ $cliente->idCliente }}</th>
                    <th>{{ $cliente->Persona_idPersona }}</th>

                    <th>
                        <form action="{{ route('clientes.destroy', $cliente->idCliente ) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este cliente?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color:red; color:white;">Delete</button>
                        </form>
                    </th>
                    <th>
                        <a href="{{ route('clientes.edit', $cliente->idCliente )}}">
                            <input type="button" style="background-color: blue; color:white;" value="Edit">
                        </a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
