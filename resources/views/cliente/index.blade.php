@extends('home')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h3>LISTA DE CLIENTES</h3>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo
            </button>
            <div class="table-responsive">
                <br>
                <table class="table">
                    <thead class="table-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">CORREO</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr class="">
                                <td scope="row">{{ $cliente->id }}</td>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>{{ $cliente->correo }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#edit{{ $cliente->id }}">
                                        EDITAR</button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#delete{{ $cliente->id}}">
                                        ELIMINAR</button>

                                </td>
                            </tr>
                            @include('cliente.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('cliente.create')

        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
