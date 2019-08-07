<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('valor_pago');
            $table->double('valor_saldo_anterior');
            $table->double('valor_saldo_actual');
            $table->double('interes_calculado');
            $table->double('valor_abono_capital');   

            $table->unsignedBigInteger('credito_id');
            $table->foreign('credito_id')->references('id')->on('creditos');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
}
