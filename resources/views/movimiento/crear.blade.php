@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 m-auto">
            <div class="card my-5" style="box-shadow: 8px 8px 15px rgba(0,0,0,0.2)">
                <h2 class="bg-danger text-center text-white p-5">Añadir un Crédito</h2>
                <form   action="/TipoCredito" method="POST"   enctype="multipart/form-data">
                    @csrf           
                            <div class="form-group p-5">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="txtValorCredito">Valor del Crédito</label>
                                            <input name="txtValorCredito" type="text" pattern="{0-9}"  class="form-control" id="txtValorCredito" placeholder="Valor Crédito" required>
                                                                                        
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="txtinteresfijo">Saldo del crédito </label>
                                            
                                            <input name="txtinteresfijo" type="text" pattern="{0-9}"  class="form-control" id="txtinteresfijo" placeholder="Porcentaje del interes" required>
                                        </div>
                                </div>
                                    <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="txtinteresfijo">Cliente </label>


                                                <input name="txtinteresfijo" type="text" pattern="{0-9}"  class="form-control" id="txtinteresfijo" placeholder="Porcentaje del interes" required>
                                            </div>
                                    </div>                                  
                                    

                                          <div class="form-row">
                                                <div class="col-2"><button type="submit" onclick="return confirm('¿Desea guardar este nuevo crédito?');" class="btn btn-primary">Registrar</button></div>
                                                <div class="col-2"><button type="reset" class="btn btn-danger">Limpiar</button></div>
                                            </div>
            
                                        </div>                    
                  </form>
            </div>
        </div>
    </div>
</div>

    
@endsection