@extends('layouts.app')

@section('content')
<div class="container-fluid p-5 bg-danger text-white my-5 text-center">
    <h2>Crédito</h2>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 m-auto">
            <table class="table table-striped table-dark table-hover table-responsive text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tipo de crédito</th>
                        <th scope="col">Interés del crédito</th>
                        <th scope="col">Valor del crédito</th>
                        <th scope="col">Valor del saldo</th>
                        <th scope="col">Número de cuotas</th>
                        <th scope="col">Número de cuotas faltantes</th>
                        <th scope="col">Valor cuotas</th>
                        <th scope="col">Cliente asociado al crédito</th>
                        <th scope="col">Estado del crédito</th>
                        <th scope="col">Generar movimiento</th>
                        <th scope="col">Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><span class="badge badge-primary">{{$credito->id}}</span></th>
                        <td>{{$tipoCredito->nombre}}</td>
                        <td>{{$tipoCredito->interes_fijo*100}} %</td>
                        <td>$ {{round($credito->valor_credito,0)}} COP</td>
                        <td>$ {{round($credito->valor_saldo,0)}} COP</td>
                        <td>{{$credito->numero_cuotas }}</td>
                        <td>{{$credito->numero_cuotas_faltantes}}</td>
                        <td>$ {{round($credito->valor_cuotas,0) }} COP</td>
                        <td>{{$cliente->user_id}}</td>
                        @if ($credito->estado_credito=='SIN PAGAR')
                            <td> <span class="badge badge-danger" style="font-size: 1.1em">{{$credito->estado_credito}}</span></td>
                        @else
                        <td> <span class="badge badge-success" style="font-size: 1.1em">{{$credito->estado_credito}}</span></td>
                        @endif
                        @if ($credito->numero_cuotas_faltantes==0)
                        <td>
                            <span class="badge badge-primary" style="font-size: 1.1em">Movimientos completados</span>
                        </td>
                        @else
                        <td>
                            <form action="/GenerarMovimiento/{{$credito->id}}" method="GET">
                            <button type="submit" class="btn btn-success">Generar</button>
                            </form>
                        </td>
                        @endif
                        <td>
                            <form action="/Credito/{{$credito->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Desea eliminar el crédito?');" class="btn btn-danger">Eliminar</button>
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

@if (count($movimiento))

<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-9 m-auto">
                <table class="table table-striped table-dark table-hover table-responsive text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID Movimiento</th>
                            <th scope="col">Valor del pago</th>
                            <th scope="col">Valor del saldo anterior</th>
                            <th scope="col">Valor del saldo actual</th>
                            <th scope="col">Interés calculado</th>
                            <th scope="col">Valor de abono al capital</th>
                            <th scope="col">Fecha y hora del pago</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movimiento as $movimientos)
                        <tr>
                            <th scope="row"><span class="badge badge-primary">{{$movimientos->id}}</span></th>
                            <td>$ {{round($movimientos->valor_pago, 0)}} COP</td>
                            <td>$ {{round($movimientos->valor_saldo_anterior, 0)}} COP</td>
                            <td>$ {{round($movimientos->valor_saldo_actual, 0)}} COP</td>
                            <td>$ {{round($movimientos->interes_calculado, 0)}} COP</td>
                            <td>$ {{round($movimientos->valor_abono_capital, 0)}} COP</td>
                            <td>{{$movimientos->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
            </table> 
            </div>
        </div>
    </div>      
@else

<div class="container-fluid">
    <div class="row text-center">
        <div class="col-md-8 m-auto">
            <div class="alert alert-danger alert-dismissible fade show p-5" role="alert">
                EL CRÉDITO AÚN NO HA TENIDO MOVIMIENTOS BANCARIOS
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>       
    </div>
</div>

    
@endif
    
@endsection
