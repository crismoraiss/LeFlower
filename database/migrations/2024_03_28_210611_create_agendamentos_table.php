<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamentosTable extends Migration
{
    public function up()
    {
        Schema::create('tblagendamentos', function (Blueprint $table) {
            $table->id(); // Esta linha cria uma coluna 'id' autoincrementada
            $table->unsignedBigInteger('idCliente');
            $table->unsignedBigInteger('idServico')->nullable();
            $table->date('dataAgendamento');

            $table->foreign('idCliente')->references('idCliente')->on('tblclientes');
            $table->foreign('idServico')->references('idServico')->on('tblservicos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblagendamentos');
    }
}
