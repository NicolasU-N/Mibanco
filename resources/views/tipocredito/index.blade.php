@extends('layouts.app')

@section('content')
<div class="container-fluid p-5 bg-danger text-white my-5 text-center">
    <h2>Tipos de créditos</h2>
</div>
    

<div class="container-fluid">
    @if (count($tipoCredito))
        <div class="row">
            @foreach ($tipoCredito as $tipoCreditos)
                <div class="col-md-4 m-auto">
                    <div class="card text-center  my-5 "  style="box-shadow: 8px 8px 15px rgba(0,0,0,0.2)">
                    <h3 class="bade badge-primary p-5">Tipo de crédito: {{$tipoCreditos->nombre}}</h3>
                        <div class="row">
                            <div class="col-6 m-auto">  
                                <a href="/TipoCredito/{{$tipoCreditos->id}} " class="btn btn-primary my-5"> Más información</a>        
                            </div>
                        </div>
                    </div>
                </div>   
            @endforeach           
            
        </div>
    @else
    
    <div class="row mt-5">
            <div class="col-md-6 m-auto">
                <div class="card text-center p-5" style="box-shadow: 8px 8px 8px rgba(0,0,0,0.2)">
                    <i class="fas fa-search my-5" style="font-size: 10em; color:rgba(0,0,0,1)"></i>
                    <p style="font-weight: bold"> No se encontró ningún tipo de crédito </p>
                </div>
            </div>
        </div>



    @endif
</div>
    
@endsection
