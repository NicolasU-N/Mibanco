@extends('layouts.app')

@section('content')

<div class="container-fluid">
    @if (count($cliente))
        <div class="row">
            
            @foreach ($cliente as $clientes)
                <div class="col-md-4 m-auto">
                <div class="card text-center">
                    <img src="imagenes/{{$clientes->avatar}}" alt="Imagen cliente" width="180px" style="object-fit: cover" class="card-img rounded-circle bg-dark mx-auto my-2" style="height: 13em; width: 13em;">
                </div>
                </div>   
            @endforeach
           
            
        </div>
    @else
        
    @endif
</div>
    
@endsection
