<x-layout>
    <x-slot name="title">
        Diagnosticos
    </x-slot>
    <h1>Diagnosticos</h1>

    <x-navDiag/>

    <div class="forms-pregunt">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Descripcion</th>
                <th>FechaDiagnostico</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody class="diagnostico">
            @foreach($diagnosticos as $diagnostico)
                <tr>
                    <th>{{$diagnostico->idDiagnostico}}</th>
                    <th>{{$diagnostico->Descripcion }}</th>
                    <th>{{$diagnostico->FechaDiagnostico }}</th>
                    <th>
                        <form action="{{ route('diagnosticos.destroy', $diagnostico->idDiagnostico) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este diagnostico?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color:red; color:white;">Delete</button>
                        </form>
                        <a href="{{ route('diagnosticos.edit', $diagnostico->idDiagnostico)}}">
                            <input type="button" style="background-color: blue; color:white;" value="Edit">
                        </a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-layout>


