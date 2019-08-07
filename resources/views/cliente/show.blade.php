@extends('layouts.app')

@section('content')

<div class="container-fluid p-5 bg-danger text-white my-5 text-center">
        <h2>Cliente</h2>
    </div>
    

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-auto">
            <table class="table table-striped table-dark table-hover table-responsive text-center">
                <thead>
                    <tr>
                        <th scope="col">Identificación</th>
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
                        <th scope="row"><span class="badge badge-primary">{{$cliente->user_id}}</span></th>
                        <td>{{$tipoDocumento->nombre}}</td>
                        <td>{{$cliente->nombres}}</td>
                        <td>{{$cliente->apellidos}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->fechanacimiento}}</td>
                        <td>{{$cliente->celular}}</td>
                        @if (count($credito))
                        <td>
                            <ul>
                                @foreach ($credito as $creditos)
                            <li> Crédito ID: {{$creditos->id}} </li>
                                @endforeach
                            </ul>
                        </td>
                        @else
                            <td>AÚN SIN CRÉDITOS ASOCIADOS</td>
                        @endif
                        <td>
                            <form action="/Cliente/{{$cliente->id}}/edit" method="GET">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="/Cliente/{{$cliente->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Desea eliminar a éste cliente?');" class="btn btn-danger">Eliminar</button>
                            </form>                        
                        </td>
                    </tr>
                </tbody>
            </table> 
        </div>
    </div>  
</div>  

<div class="container-fluid p-5 bg-danger text-white my-5 text-center">
        <h2>Créditos</h2>
    </div>
    @if (count($credito))
    <div class="container-fluid">
        <div class="row">
            @foreach ($credito as $creditos)
            <div class="col-md-4 m-auto">
                <div class="card text-center">
                    <h3 class="p-5 bg-primary text-white">ID del crédito: {{$creditos->id}} </h3>
                    <div class="row p-5">
                        <div class="col-6 m-auto my-5">
                        <a class="btn btn-primary" href="/Credito/{{$creditos->id}}">Más información</a>
                        </div>
                    </div>
                </div>
            </div>      
            @endforeach
        </div>
    @else
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-8 m-auto">
                <div class="alert alert-danger alert-dismissible fade show p-5" role="alert">
                    NO HAY CRÉDITOS ASOCIADOS A ÉSTE CLIENTE
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>       
        </div>
    </div>
            
    @endif
</div>



    
@endsection
