@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 m-auto">
            <table class="table table-striped table-dark table-hover table-responsive text-center">
                <thead>
                    <tr>
                        <th scope="col">N° Documento</th>
                        <th scope="col">Tipo de documento</th>
                        <th scope="col">Nombre(s)</th>
                        <th scope="col">Apellido(s)</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Créditos</th>
                        <th scope="col">Editar cliente</th>
                        <th scope="col">Eliminar cliente</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><span class="badge badge-info">{{$cliente->user_id}}</span></th>
                        <td>{{$tipoDocumento->nombre}}</td>
                        <td>{{$cliente->nombres}}</td>
                        <td>{{$cliente->apellidos}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->fechanacimiento}}</td>
                        <td>{{$cliente->celular}}</td>
                        <td></td>
                        <td>
                            <form action="/Cliente/{{$cliente->id}}/edit" method="GET">
                                <button type="submit" class="btn btn-info">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="/Cliente/{{$cliente->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Desea eliminar el cliente?');" class="btn btn-danger">Eliminar</button>
                            </form>                        
                        </td>
                    </tr>
                </tbody>
        </table> 
        </div>
    </div>
</div>      


    
@endsection
