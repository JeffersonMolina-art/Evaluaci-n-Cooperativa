<x-layout>
    <x-slot name="title">
        Tecnico
    </x-slot>
    <h1>Tecnico</h1>
    <x-navTecnico/>
    <div class="forms-pregunt">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id Tecnico</th>
                <th> Id Persona</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>
            </thead>
            <tbody class="clientes">
            @foreach($tecnicos as $tecnico)
                <tr>
                    <th>{{ $tecnico->idTecnico }}</th>
                    <th>{{ $tecnico->Persona_idPersona }}</th>

                    <th>
                        <form action="{{ route('tecnicos.destroy', $tecnico->idTecnico ) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este tecnico?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color:red; color:white;">Delete</button>
                        </form>
                    </th>
                    <th>
                        <a href="{{ route('tecnicos.edit', $tecnico->idTecnico )}}">
                            <input type="button" style="background-color: blue; color:white;" value="Edit">
                        </a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
