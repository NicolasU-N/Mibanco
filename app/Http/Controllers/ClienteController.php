<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoDocumento;
use App\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = Cliente::all();
    return view('cliente.index', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoDocumento = TipoDocumento::all();

        return view('cliente.crear', compact('tipoDocumento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente;

        if ($request->hasFile('fileAvatar')) {
            $file = $request->file('fileAvatar');
            $nombreArchivo = time().'-'.$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/',$nombreArchivo);
            $cliente->avatar = $nombreArchivo;
        }

        $cliente->nombres=$request->txtNombre;
        $cliente->apellidos=$request->txtApellido;
        $cliente->email=$request->txtEmail;
        $cliente->tipodocumento_id=$request->txtTipoDoc;
        $cliente->email=$request->txtEmail;
        $cliente->user_id=$request->txtDocumento;
        $cliente->celular=$request->txtCelular;

        $cliente->save();

        return redirect('/Cliente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
