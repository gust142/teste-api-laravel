<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacaos', function (Blueprint $table) {
            $table->increments('transacaoId');
            $table->integer('contaId')->unsigned();
            $table->decimal('valor',5,2);
            $table->integer('tipoId')->unsigned();
            $table->timestamps();
            $table->foreign('contaId')->references('id')->on('contas')->onDelete('cascade');
            $table->foreign('tipoId')->references('id')->on('operacaos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transacaos');
    }
}
