<x-layout>
    <x-slot name="title">
            Personas
    </x-slot>
    <h1>Personas</h1>

    <x-navPerson/>

    <div class="forms-pregunt">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Genero</th>
                <th>Telefono</th>
                <th>DPI</th>
                <th>NIT</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody class="departamento">
            @foreach($personas as $persona)
                <tr>
                    <th>{{$persona->idPersona}}</th>
                    <th>{{$persona->PrimerNombre }}</th>
                    <th>{{$persona->SegundoNombre }}</th>
                    <th>{{$persona->PrimerApellido }}</th>
                    <th>{{$persona->SegundoApellido }}</th>
                    <th>{{$persona->Genero }}</th>
                    <th>{{$persona->Telefono }}</th>
                    <th>{{$persona->DPI }}</th>
                    <th>{{$persona->NIT }}</th>
                    <th>
                        <form action="{{ route('persona.destroy', $persona->idPersona) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta persona?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color:red; color:white;">Delete</button>
                        </form>
                        <a href="{{ route('persona.edit', $persona->idPersona)}}">
                            <input type="button" style="background-color: blue; color:white;" value="Edit">
                        </a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-layout>


