@extends('layouts.app')

@section('content')

<div class="container-fluid">
    @if (count($tipoCredito))
        <div class="row">
            
            @foreach ($tipoCredito as $tipoCreditos)
                <div class="col-md-2 m-auto">
                    <div class="card text-center  mb-5">
                            <div class="card">
                                <div class="card-body ">
                                    <h5 class="card-title">{{$tipoCreditos->nombre}}</h5>                                    
                                    <h6 class="card-title">{{$tipoCreditos->interes_fijo}}</h6>                                    
                                    <p class="card-text">{{$tipoCreditos->descripcion}}</p>

                                    <!-- Buttons para editar y borrar -->
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                    </div>
                </div>   
            @endforeach           
            
        </div>
    @else
        
    @endif
</div>
    
@endsection
