@extends('layouts.app')

@section('content')
<div class="container-fluid p-5 bg-danger text-white my-5 text-center">
    <h2>Crédito</h2>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-7 m-auto">
            <table class="table table-striped table-dark table-hover table-responsive text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Interés del crédito</th>
                        <th scope="col">Valor del crédito</th>
                        <th scope="col">Valor del saldo</th>
                        <th scope="col">Número de cuotas</th>
                        <th scope="col">Valor cuotas</th>
                        <th scope="col">Cliente asociado al crédito</th>
                        <th scope="col">Movimientos</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Generar movimiento</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><span class="badge badge-info">{{$credito->id}}</span></th>
                        <td>{{$tipoCredito->interes_fijo*100}}</td>
                        <td>{{$credito->valor_credito}}</td>
                        <td>{{$credito->valor_saldo}}</td>
                        <td>{{$credito->numero_cuotas }}</td>
                        <td>......</td>
                        <td>{{$cliente->user_id}}</td>
                        <td>......</td>
                        <td>
                            <form action="/Credito/{{$credito->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Desea eliminar el crédito?');" class="btn btn-danger">Eliminar</button>
                            </form>                        
                        </td>
                        <td>
                            <form action="/Movimientos/{{$credito->id}}" method="GET">
                            <button type="submit" class="btn btn-success">Generar</button>
                            </form>
                        </td>

                    </tr>
                </tbody>
        </table> 
        </div>
    </div>

    
</div>      

<div class="container-fluid my-5 p-5 text-center bg-danger text-white">
        <h2>Movimientos</h2>
</div>
<div class="container-fluid my-5">
        <div class="row">    
                <div class="col-md-8 m-auto text-center">
                <div class="row">Movimientos</div>
                </div>
        </div>
</div>
    
@endsection
