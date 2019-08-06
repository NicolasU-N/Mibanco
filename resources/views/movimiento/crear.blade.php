@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 m-auto">
            <div class="card my-5" style="box-shadow: 8px 8px 15px rgba(0,0,0,0.2)">
                <h2 class="bg-danger text-center text-white p-5">Añadir un Movimiento</h2>
                <form   action="/Movimiento" method="POST" >
                    @csrf           
                            <div class="form-group p-5">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="ValorPago">Valor a Pagar</label>
                                            <input name="txtValorPago" type="text" pattern="{0-9}"  class="form-control" id="ValorPago" placeholder="Valor Pago" required>                                                                                        
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ValorSaldoAnterior">Valor  saldo anterior</label>
                                            <input type="number" pattern="{0-9}"  min="1" class="form-control" id="ValorSaldoAnterior" value="{{$credito->valor_credito}}" disabled>                                                                                        
                                        </div>
                                        </div> 
                                        <div class="row text-center p-5">
                                                <div class="col-6"><button type="submit" onclick="return confirm('¿Desea registrar este nuevo movimiento?');" class="btn btn-success">Registrar</button></div>
                                                <div class="col-6"><button type="reset" class="btn btn-danger">Limpiar</button></div>
                                            </div>
                            </div>                   
                  </form>
            </div>
        </div>
    </div>
</div>

    
@endsection