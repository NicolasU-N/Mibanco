@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-2 text-center ml-auto">
            @if ($cliente->avatar)
                <img src="/imagenes/{{$cliente->avatar}}" alt="imagen cliente" class="card-img rounded-circle bg-dark mx-auto" style="height: 20em; width: 20em; object-fit: cover">
            @else
                <i class="fas fa-address-book" style="font-size: 15em; color:black"></i>
            @endif
        </div>
        <div class="col-md-7 m-auto">
            <div class="card" style="box-shadow: 8px 8px 15px rgba(0,0,0,0.2)">
                    <form action="/Cliente/{{$cliente->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h3 class="bg-danger text-white p-5 text-center">Actualización de datos de un cliente</h3>
                        <div class="form-row p-5">
                            <div class="form-group col-md-6">
                                <label >Nombres</label>
                                <input name="txtNombre" type="text" value="{{$cliente->nombres}}" class="form-control" >
                            </div>
                            <div class="form-group col-md-6">
                                <label >Apellidos</label>
                                <input name="txtApellido" type="text" value="{{$cliente->apellidos}}" class="form-control" >
                            </div>
                            <div class="form-group col-md-6">
                                <label >N° documento</label>
                                <input type="text" value="{{$cliente->user_id}}" class="form-control" disabled>
                            </div>
                
                            <div class="form-group col-md-6">
                                <label>Fecha de nacimiento</label>
                                <input type="date"  class="form-control" value="{{$cliente->fechanacimiento}}"  disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="text"  name="txtEmail" class="form-control" value="{{$cliente->email}}" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Celular</label>
                                <input type="text"  name="txtCelular" pattern="{0-9}" class="form-control" value="{{$cliente->celular}}" >
                            </div>
                            <div class="form-group col-md-12">
                                <label>Dirección</label>
                                <input type="text"  name="txtDireccion" class="form-control" value="{{$cliente->direccion}}" >
                            </div>
                            <div class="form-group col-md-12 ">
                                <div class="custom-file">
                                  <input name="fileAvatar" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">Cargar foto del cliente</label>
                                </div>
                        </div>

                            
                        </div>
                        <hr />
                        <div class="row pb-5 text-center">
                            <div class="col-6">
                                <button type="submit" onclick="return confirm('¿Desea actualizar a éste cliente?');" class="btn btn-success">Actualizar</button>
                            </div>
                            </form>
                            <div class="col-6">
                                <form action="/Cliente/{{$cliente->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('¿Desea eliminar a éste cliente?');" class="btn btn-danger">Eliminar</button>
                                </form>                        
                            </div>
            </div>  
        </div>
    </div>
</div>
    
@endsection
