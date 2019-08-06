@extends('layouts.app')

@section('content')

<div class="container-fluid p-5 bg-danger text-white my-5 text-center">
        <h2>Cliente</h2>
    </div>
    

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
                        @if (count($credito))
                        <td>
                            <ul>
                                    @foreach ($credito as $creditos)
                                <li> {{$creditos->id}}</li>
                                @endforeach
                            </ul>
                        </td>
                        @else
                            Aún sin créditos
                        @endif
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

<div class="container-fluid p-5 bg-danger text-white my-5 text-center">
        <h2>Créditos</h2>
    </div>
    <div class="container-fluid">
            <div class="row">
                    @foreach ($credito as $creditos)
                    <div class="col-md-4 m-auto">
                        <div class="card my-5  text-center" style="box-shadow:  8px 8px 15px rgba(0,0,0,0.2)">
                        <h3 class="bg-danger p-5 text-white">ID CRÉDITO:  {{$creditos->id}}</h3>
                        <h3 class="p-3">VALOR CRÉDITO: {{$creditos->valor_credito}}</h3>
                        <hr />
                        <h3 class="p-3">CUOTAS:  {{$creditos->numero_cuotas}}</h3>
                        <hr />
                        <div class="row py-3">
                            <div class="col-md-4 m-auto">
                            <form action="/Credito/{{$creditos->id}}" method="GET">
                                <button class="btn btn-primary" type="submit">Más información</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                        
                    @endforeach
                </div>
    </div>



    
@endsection
