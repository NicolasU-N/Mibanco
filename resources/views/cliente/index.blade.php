@extends('layouts.app')

@section('content')

@if (count($cliente))
<div class="container-fluid">
    <div class="row justify-content-center">
        @foreach ($cliente as $clientes)
            <div class="col-md-4">
                <div class="card text-center pb-2 pt-5 my-5" style="box-shadow: 8px 8px 15px rgba(0,0,0,0.2)">
                    @if ($clientes->avatar)
                        <img src="/imagenes/{{$clientes->avatar}}" alt="imagen cliente" class="card-img rounded-circle bg-dark mx-auto my-2" style="height: 13em; width: 13em; object-fit: cover">    
                    @else
                        <i class="fas fa-address-book p-4" style="font-size: 10em; color:rgba(0,0,0,1)"></i>
                    @endif
                    
                    <div class="card-body">
                        <h5 style="font-weight: bold">Nombre del cliente: <span class="badge badge-dark"> {{$clientes->nombres}} {{$clientes->apellidos}} </span></h5> 
                        <hr />
                        <h5 style="font-weight: bold">N° de documento: <span class="badge badge-dark"> {{$clientes->user_id}} </span></h5> 
                        <hr />
                        <form action="/Cliente/{{$clientes->id}}" method="get">
                            <button type="submit" class="btn btn-primary">Más información</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@else
<div class="container-fluid">
<div class="row mt-5">
    <div class="col-md-6 m-auto">
        <div class="card text-center p-5" style="box-shadow: 8px 8px 8px rgba(0,0,0,0.2)">
            <i class="fas fa-address-book my-3" style="font-size: 10em; color:rgba(0,0,0,1)"></i>
            <p style="font-weight: bold"> No se encontró ningún cliente </p>
        </div>
    </div>
</div>
</div>
@endif 
    
@endsection
