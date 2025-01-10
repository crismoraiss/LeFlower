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
        Schema::create('tblclientes', function (Blueprint $table) {
            $table->bigIncrements('idCliente');
            $table->string('nomeCliente', 50);
            $table->string('telefoneCliente', 16);
            $table->string('emailCliente', 100);
            $table->string('senhaCliente', 20);
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
        Schema::dropIfExists('tblclientes');
    }
};
