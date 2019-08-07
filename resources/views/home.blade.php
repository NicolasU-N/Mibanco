@extends('layouts.app')

@section('content')


<div class="container-fluid">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-center text-center">
        
        <div class="col-md-3 m-auto">
                <div class="card my-5">
                    <i class="fas fa-wallet my-5" style="font-size: 10em; color:rgba(0,0,0,1)"></i>
                    <h2>Tipos de créditos</h2>
                    <hr />
                    <div class="row">
                        <div class="col-6  my-3"><a href="/TipoCredito/create" class="btn btn-primary">Crear</a></div>
                        <div class="col-6  my-3"><a href="/TipoCredito" class="btn btn-primary">Consultar</a></div>
                    </div>
                </div>
        </div>
        <div class="col-md-3 m-auto">
            <div class="card my-5">
                <i class="fas fa-address-book my-5" style="font-size: 10em; color:rgba(0,0,0,1)"></i>
                <h2>Clientes</h2>
                <hr />
                <div class="row">
                    <div class="col-6  my-3"><a href="/Cliente/create" class="btn btn-primary">Crear</a></div>
                    <div class="col-6  my-3"><a href="/Cliente" class="btn btn-primary">Consultar</a></div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 m-auto">
            <div class="card my-5">
                <i class="fas fa-money-check-alt my-5" style="font-size: 10em; color:rgba(0,0,0,1)"></i>
                <h2>Solicitud de crédito</h2>
                <hr />
                <div class="row">
                    <div class="col-6 mx-auto my-3"><a href="/Credito/create" class="btn btn-primary">Crear</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
