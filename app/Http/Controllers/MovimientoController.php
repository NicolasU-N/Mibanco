<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Credito;
use App\Cliente;
use App\TipoCredito;
use App\Movimiento;

class MovimientoController extends Controller
{
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function crear($id)
    {
        $credito = Credito::findOrFail($id);

        $tipoCredito= $credito->tipocredito_id;

        $tipoCreditoId = TipoCredito::findOrFail($tipoCredito); 

        $valorInteres = $tipoCreditoId->interes_fijo;



        return view('movimiento.crear', compact('credito','valorInteres'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movimiento = new Movimiento;

        
        

        $movimiento->credito_id=$request->txtIdCredito;
        
        $creditoID=$movimiento->credito_id=$request->txtIdCredito;
        $credito = Credito::findOrFail($creditoID);
        
        $saldoCredito= $saldo= $credito->valor_saldo;
        $saldo= $credito->valor_saldo;
        
        $cuota= $credito->valor_cuotas;
        
        $tipoCredito= $credito->tipocredito_id;
        $tipoCreditoId = TipoCredito::findOrFail($tipoCredito); 
        $interes = $tipoCreditoId->interes_fijo;
        $interesCalculado=$saldo*$interes;
        
        $abono=$cuota-$interesCalculado;
        
        $saldoActual=$saldoCredito-$abono;
        
        $movimiento->valor_saldo_anterior=$saldo;
        $movimiento->valor_pago=$cuota;
        $movimiento->interes_calculado=$interesCalculado;
        $movimiento->valor_abono_capital=$abono; 
        $movimiento->valor_saldo_actual=$saldoActual;
        
        $actualizarSaldo=$movimiento->valor_saldo_actual=$saldoActual;
        
        $credito->valor_saldo=$actualizarSaldo;
        
        $cuotasFaltantes=$credito->numero_cuotas_faltantes;
        $cuotasFinales=$cuotasFaltantes-1;
        
        $credito->numero_cuotas_faltantes=$cuotasFinales;

        $credito->save();

        if ($cuotasFinales==0) {
            $credito->estado_credito='PAGADO';
            $credito->save();

        }
        
        
        $movimiento->save();

        return redirect('/Cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    



    
}
