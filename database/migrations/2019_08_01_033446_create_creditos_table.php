<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('valor_credito');
            $table->double('valor_saldo');  
            $table->integer('numero_cuotas');
            $table->integer('numero_cuotas_faltantes');
            $table->double('valor_cuotas');     
             
           
            $table->string('user_id');
            $table->foreign('user_id')->references('user_id')->on('clientes');

            $table->unsignedBigInteger('tipocredito_id');
            $table->foreign('tipocredito_id')->references('id')->on('tipo_creditos');
           
            $table->string('estado_credito')->default('SIN PAGAR');
           
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
        Schema::dropIfExists('creditos');
    }
}
