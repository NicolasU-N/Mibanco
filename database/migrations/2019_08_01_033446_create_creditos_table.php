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
            $table->double('interes');
            $table->double('valor_credito');
            $table->double('valor_saldo');
            
            $table->string('usuario_credito');
            $table->foreign('usuario_credito')->references('documento')->on('users');

            $table->unsignedBigInteger('tipo_credito');
            $table->foreign('tipo_credito')->references('id')->on('tipo_creditos');
        
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
