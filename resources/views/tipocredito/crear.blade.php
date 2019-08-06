@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 m-auto">
            <div class="card my-5" style="box-shadow: 8px 8px 15px rgba(0,0,0,0.2)">
                <h2 class="bg-danger text-center text-white p-5">Añadir un Tipo de Crédito</h2>
                <form   action="/TipoCredito" method="POST"   enctype="multipart/form-data">
                    @csrf           
                            <div class="form-group p-5">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputNombre">Nombre del tipo de crédito</label>
                                            <input name="txtNombre" type="text" class="form-control" id="inputNombre" placeholder="Nombre" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="txtinteresfijo">Interés Fijo</label>
                                            <input name="txtInteresFijo" type="number" min="0" class="form-control" id="txtinteresfijo" placeholder="Porcentaje del interes" required>
                                        </div>

                                            <div class="form-group col-md-12">
                                                <label for="txtDescription">Descripción</label>
                                                <textarea name="txtDescripcion"  id="txtDescription" class="md-textarea form-control" rows="3"></textarea>                                    
                                            </div>
                                            
                                    
                                        <div class="col-2"><button type="submit" onclick="return confirm('¿Desea guardar este nuevo tipo de crédito?');" class="btn btn-primary">Registrar</button></div>
                                        <div class="col-2"><button type="reset" class="btn btn-danger">Limpiar</button></div>
                                    
                            </div>
                                        
                    
                  </form>
            </div>
        </div>
    </div>
</div>

    
@endsection