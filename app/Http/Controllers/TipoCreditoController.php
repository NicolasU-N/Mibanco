<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoCredito;


class TipoCreditoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoCredito = TipoCredito::all();
        return view('tipocredito.index', compact('tipoCredito'));       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipocredito.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tipoCredito = new TipoCredito;

        $tipoCredito->nombre=$request->txtNombre;
        $tipoCredito->descripcion=$request->txtDescripcion;
        $tipoCredito->interes_fijo=$request->txtInteresFijo/100;
        $tipoCredito->save();

        return redirect('/TipoCredito');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoCredito =  TipoCredito::findOrFail($id);

        return view('tipocredito.show', compact('tipoCredito'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoCredito = TipoCredito::findOrFail($id);

        return view('tipocredito.edit', compact('tipoCredito'));
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
        $tipoCredito =  TipoCredito::findOrFail($id);

        $tipoCredito->nombre=$request->txtNombre;
        $tipoCredito->descripcion=$request->txtDescripcion;
        $tipoCredito->interes_fijo=$request->txtInteresFijo/100;
        $tipoCredito->save();

        return redirect('/TipoCredito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoCredito =  TipoCredito::findOrFail($id);

        $tipoCredito->delete();
        return redirect('TipoCredito');
    }
}
