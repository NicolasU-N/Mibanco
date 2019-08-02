<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email');

            $table->unsignedBigInteger('tipodocumento_id');
            $table->foreign('tipodocumento_id')->references('id')->on('tipo_documentos');

            $table->string('user_id')->unique();
            $table->string('celular');
            $table->string('avatar');
                  
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
        Schema::dropIfExists('clientes');
    }
}
