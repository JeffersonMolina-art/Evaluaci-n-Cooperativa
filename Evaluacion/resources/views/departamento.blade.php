<x-layout>
    <x-slot name="title">
        Departamentos
    </x-slot>
    <h1>Departamentos</h1>
    <x-navDep/>
    <div class="forms-pregunt">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Departamento</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>
            </thead>
            <tbody class="departamento">
            @foreach($departamentos as $departamento)
                <tr>
                    <th>{{ $departamento->Descricpion }}</th>
                    <th>
                        <form action="{{ route('departamentos.destroy', $departamento->idDepartamento) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este departamento?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color:red; color:white;">Delete</button>
                        </form>
                    </th>
                    <th>
                        <a href="{{ route('departamentos.edit', $departamento->idDepartamento)}}">
                            <input type="button" style="background-color: blue; color:white;" value="Edit">
                        </a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
