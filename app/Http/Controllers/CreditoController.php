<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Credito;
use App\Cliente;
use App\TipoCredito;

class CreditoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return redirect('/Cliente') ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $tipoCredito = TipoCredito::all();
       $cliente = Cliente::all();

        return view('credito.crear', compact('cliente', 'tipoCredito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credito = new Credito;

       
        $credito->valor_credito=$request->txtCredito;
        $valorCredito=$credito->valor_credito=$request->txtCredito;

        $credito->valor_saldo=$valorCredito;
        
        $credito->numero_cuotas=$request->txtNumCuotas;

        
        $credito->user_id=$request->txtCliente;
        $credito->tipocredito_id=$request->txtTipoCredito;

        $credito->save();

        return redirect('/Credito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $credito =  Credito::findOrFail($id);
        $cliente = $credito->usuario;
        $tipoCredito = $credito->tipoCredito;
        return view('credito.show', compact('credito','tipoCredito','cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $credito = Credito::findOrFail($id);
        $credito->delete();
    }
}
