@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 m-auto">
            <div class="card my-5" style="box-shadow: 8px 8px 15px rgba(0,0,0,0.2)">
                <h2 class="bg-danger text-center text-white p-5"> Registrar un cliente</h2>
                <form   action="/Cliente" method="POST"   enctype="multipart/form-data">
                    @csrf
                    <div class="form-row p-5">
                        <div class="form-group col-md-6">
                            <label for="inputEmail1">Nombre</label>
                            <input name="txtNombre" type="text" class="form-control" id="inputEmail1" placeholder="Nombre" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail2">Apellido</label>
                            <input name="txtApellido" type="text" class="form-control" id="inputEmail2" placeholder="Apellido" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail3">Email</label>
                            <input name="txtEmail" type="text" class="form-control" id="inputEmail3" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-6 m-auto">
                            <label for="inputState">Documento</label>
                            <select id="inputState" class="form-control" name="txtTipoDoc">
                                @foreach ($tipoDocumento as $tipoDocumentos)
                                <option value={{$tipoDocumentos->id}}>{{$tipoDocumentos->nombre}}</option>
                                @endforeach           
                            </select>
                        </div>
                         <div class="form-group col-md-6">
                            <label for="inputEmail4">Número de documento</label>
                            <input name="txtDocumento" type="text" class="form-control" id="inputEmail4" placeholder="Número de documento" required>
                        </div>
                         <div class="form-group col-md-6">
                            <label for="inputEmail5">Celular</label>
                            <input name="txtCelular" type="text" pattern="{0-9}"  class="form-control" id="inputEmail5" placeholder="Número de celular" required>
                        </div>
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01">Cargar</span>
                                </div>
                                <div class="custom-file">
                                  <input name="fileAvatar" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">Cargar foto del cliente</label>
                                </div>
                        </div>
                              <hr />
                              <div class="row">
                                    <div class="col-6"><button type="submit" onclick="return confirm('¿Desea registrar al acudiente?');" class="btn btn-primary">Registrar</button></div>
                                    <div class="col-6"><button type="reset" class="btn btn-danger">Limpiar</button></div>
                                </div>
                  </form>
            </div>
        </div>
    </div>
</div>

    
@endsection