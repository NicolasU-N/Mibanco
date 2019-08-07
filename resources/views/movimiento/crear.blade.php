@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card my-5" style="box-shadow: 8px 8px 15px rgba(0,0,0,0.2)">
                <h2 class="bg-danger text-center text-white p-5"> Generar movimiento</h2>
            <form action="/Movimiento" method="POST" >
                    @csrf
                    <div class="form-row p-5">
                        <div class="form-group col-md-6 my-2">
                            <label for="inputCuotas4">ID crédito</label>
                            <input name="txtIdCredito" type="number" min="0" class="form-control disabled-pointer" id="inputCuotas4" value="{{$credito->id}}" required >
                        </div>
                        <div class="form-group col-md-6 my-2">
                            <label for="inputCuotas2">Saldo anterior</label>
                            <input type="number" min="0" class="form-control disabled-pointer" id="inputCuotas2" value="{{round($credito->valor_saldo,0)}}" required disabled >
                        </div>
                        <div class="form-group col-md-6 my-2">
                            <label for="inputCuotas8">Valor cuota</label>
                            <input  type="number" min="0" class="form-control disabled-pointer" id="inputCuotas8" value="{{round($credito->valor_cuotas,0)}}" required disabled >
                        </div>
                        <div class="form-group col-md-6 my-2">
                            <label for="inputCuotas3">Valor interés calculado</label>
                        <input  type="number" min="0" class="form-control disabled-pointer" id="inputCuotas3" value="{{round($credito->valor_saldo*$valorInteres, 0)}}" required disabled >
                        </div>

                        <div class="form-group col-md-6 my-2">
                            <label for="inputCuotas5">Abono al capital</label>
                        <input  type="number" min="0" class="form-control disabled-pointer" id="inputCuotas5" value="{{round($credito->valor_cuotas-($credito->valor_saldo*$valorInteres), 0)}}" required disabled >
                        </div>
                        <div class="form-group col-md-6 my-2">
                            <label for="inputCuotas6">Nuevo saldo</label>
                        <input  type="number" min="0" class="form-control disabled-pointer" id="inputCuotas6" value="{{round($credito->valor_credito-($credito->valor_cuotas-($credito->valor_saldo*$valorInteres)), 0)}}" required disabled >
                        </div>
                        
                    </div>
                    <hr />
                    <div class="row mb-5 text-center">
                            <div class="col-6"><button type="submit" onclick="return confirm('¿Desea registrar el movimiento bancario?');" class="btn btn-primary">Registrar</button></div>
                            <div class="col-6"><button type="reset" class="btn btn-danger">Limpiar</button></div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>

    
@endsection