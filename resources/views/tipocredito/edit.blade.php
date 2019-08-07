@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 m-auto">
            <div class="card my-5" style="box-shadow: 8px 8px 15px rgba(0,0,0,0.2)">
                <h2 class="bg-danger text-center text-white p-5">Actualizar tipo de Crédito</h2>
            <form   action="/TipoCredito/{{$tipoCredito->id}}" method="POST"   enctype="multipart/form-data">
                @method('PUT')
                    @csrf           
                            <div class="form-group p-5">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputNombre">Nombre del tipo del crédito</label>
                                        <input name="txtNombre" type="text" class="form-control" id="inputNombre" value="{{$tipoCredito->nombre}}" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="txtinteresfijo">Interés fijo</label>
                                        <input name="txtInteresFijo" type="number" class="form-control" id="txtinteresfijo" value="{{$tipoCredito->interes_fijo*100}}" required>
                                        </div>

                                            <div class="form-group col-md-12">
                                                <label for="txtDescription">Descripción</label>
                                            <textarea name="txtDescripcion"  id="txtDescription" class="md-textarea form-control" rows="3">{{$tipoCredito->descripcion}}</textarea>                                    
                                            </div>
                            </div>        
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <button type="submit" onclick="return confirm('¿Desea actualizar éste tipo de crédito?');" class="btn btn-success">Actualizar</button>                               
                                </div>      
                  </form>
                <form action="/TipoCredito/{{$tipoCredito->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                  <div class="col-md-6 text-center">
                        <button type="submit" onclick="return confirm('¿Desea eliminar éste tipo de crédito?');" class="btn btn-danger">Eliminar</button>
                    </div>            
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

    
@endsection