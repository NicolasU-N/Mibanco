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

        $credito->valor_credito = $request->txtCredito;
        $valorCredito= $credito->valor_credito = $request->txtCredito;
        $valorSaldo=$credito->valor_credito = $request->txtCredito; 
        $credito->valor_saldo=$valorSaldo;
        $credito->numero_cuotas=$request->txtNumCuotas;
        $cuotasFaltantes=$credito->numero_cuotas=$request->txtNumCuotas;
        $credito->numero_cuotas_faltantes=$request->txtNumCuotas;
        $cuotas=$credito->numero_cuotas=$cuotasFaltantes;
        $credito->user_id=$request->txtCliente;
        $credito->tipocredito_id=$request->txtTipoCredito;
        $tipoCredito=$credito->tipocredito_id=$request->txtTipoCredito;
        $idCredito = TipoCredito::findOrFail($tipoCredito);
        $valorInteres= $idCredito->interes_fijo;
        $valorCuota=($valorCredito*(pow(1+$valorInteres,$cuotas)*$valorInteres))/(pow(1+$valorInteres,$cuotas)-1);
        $credito->valor_cuotas= $valorCuota;
        $credito->save();
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
        $credito =  Credito::findOrFail($id);
        $cliente = $credito->usuario;
        $movimiento = $credito->movimientos;
        $tipoCredito = $credito->tipoCredito;

        return view('credito.show', compact('credito','movimiento','cliente','tipoCredito'));
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

        return redirect('/Cliente');
    }
}
