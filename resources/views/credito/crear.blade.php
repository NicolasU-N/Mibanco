@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card my-5" style="box-shadow: 8px 8px 15px rgba(0,0,0,0.2)">
                    <h2 class="bg-danger text-center text-white p-5"> Registrar un cliente</h2>
                    <form   action="/Credito" method="POST"  >
                        @csrf
                        <div class="form-row p-5">
                            <div class="form-group col-md-6 my-2">
                            <label for="inputState">Tipo de crédito</label>
                            <select id="inputState" class="form-control" name="txtTipoCredito">
                                @foreach ($tipoCredito as $tipoCreditos)
                                <option value={{$tipoCreditos->id}}>{{$tipoCreditos->nombre}}</option>
                                @endforeach           
                            </select>
                            </div>
                            <div class="form-group col-md-6 my-2">
                            <label for="inputState1">Cliente</label>
                            <select id="inputState1" class="form-control" name="txtCliente">
                                @foreach ($cliente as $clientes)
                                <option value={{$clientes->user_id}}>{{$clientes->user_id}} - {{$clientes->nombres}}{{$clientes->apellidos}}</option>
                                @endforeach           
                            </select>
                            </div>
                            <div class="form-group col-md-6 my-2">
                                <label for="inputCredito1">Valor del crédito</label>
                                <input name="txtCredito" type="number" pattern="{0-9}" min="0" class="form-control" id="inputCredito1" placeholder="Ingrese valor del crédito" required>
                            </div>
                            <div class="form-group col-md-6 my-2">
                                <label for="inputCuotas1">Cuotas</label>
                                <input name="txtNumCuotas" type="text" class="form-control" id="inputCuotas1" placeholder="Ingrese el número de cuotas" required>
                            </div>
                        <hr />
                        <div class="row my-5">
                              <div class="col-6"><button type="submit" onclick="return confirm('¿Desea registrar este crédito?');" class="btn btn-primary">Registrar</button></div>
                              <div class="col-6"><button type="reset" class="btn btn-danger">Limpiar</button></div>
                          </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>
    
    
@endsection