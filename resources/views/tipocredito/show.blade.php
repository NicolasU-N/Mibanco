@extends('layouts.app')

@section('content')

<div class="container-fluid p-5 bg-danger text-white my-5 text-center">
        <h2>Tipo de crédito</h2>
    </div>
    

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 m-auto">
            <table class="table table-striped table-dark table-hover table-responsive text-center">
                <thead>
                    <tr>
                        <th scope="col" >ID</th>
                        <th scope="col" >Nombre del crédito</th>
                        <th scope="col" >Interés fijo</th>
                        <th scope="col" >Descripción</th>
                        <th scope="col" >EDITAR</th>
                        <th scope="col" >ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><span class="badge badge-primary">{{$tipoCredito->id}}</span></th>
                        <td>{{$tipoCredito->nombre}}</td>
                        <td>{{$tipoCredito->interes_fijo*100}} %</td>
                        <td>{{$tipoCredito->descripcion}}</td>
                        <td>
                            <form action="/TipoCredito/{{$tipoCredito->id}}/edit" method="GET">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="/TipoCredito/{{$tipoCredito->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Desea eliminar a éste tipo de crédito?');" class="btn btn-danger">Eliminar</button>
                            </form>                        
                        </td>
                    </tr>
                </tbody>
        </table> 
        </div>
    </div>
</div>      


    
@endsection
