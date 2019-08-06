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
            <div class="card my-3 p-4">
                <i class="fas fa-address-book my-3" style="font-size: 10em; color:rgba(0,0,0,1)"></i>
                <h2>CLIENTES</h2>
                <hr />
                <div class="row">
                    <div class="col-md-6 m-auto"><a href="/Cliente/create" class="btn btn-primary">Crear</a></div>
                    <div class="col-md-6 m-auto"><a href="/Cliente" class="btn btn-primary">Consultar</a></div>
                </div>
            </div>
        </div>
        <div class="col-md-3 m-auto">
                <div class="card my-3 p-4">
                    <i class="fas fa-wallet my-3" style="font-size: 10em; color:rgba(0,0,0,1)"></i>
                    <h2>TIPOS DE CRÉDITOS</h2>
                    <hr />
                    <div class="row">
                        <div class="col-md-6 m-auto"><a href="/TipoCredito/create" class="btn btn-primary">Crear</a></div>
                        <div class="col-md-6 m-auto"><a href="/TipoCredito" class="btn btn-primary">Consultar</a></div>
                    </div>
                </div>
            </div>
        <div class="col-md-3 m-auto">
            <div class="card my-3 p-4">
                <i class="fas fa-money-check-alt my-3" style="font-size: 10em; color:rgba(0,0,0,1)"></i>
                <h2>SOLICITUD CRÉDITO</h2>
                <hr />
                <div class="row">
                    <div class="col-md-6 m-auto"><a href="/Credito/create" class="btn btn-primary">Crear</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
