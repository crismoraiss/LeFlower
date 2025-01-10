<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('tblfuncionarios', function (Blueprint $table) {
            $table->id('idFuncionario');
            $table->string('nomeFuncionario', 50);
            $table->dateTime('dataNascFuncionario');
            $table->string('emailFuncionario', 100);
            $table->string('telefoneFuncionario', 16);
            $table->string('senhaFuncionario', 20);
            $table->double('salarioFuncionario', 10, 2);
            $table->string('enderecoFuncionario', 30);
            $table->string('nivelFuncionario', 20);
            $table->enum('statusFuncionario', ['ATIVO', 'INATIVO']);
            $table->string('cargoFuncionario', 30);
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
        Schema::dropIfExists('tblfuncionarios');
    }

};
