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
        Schema::create('tblusuarios', function (Blueprint $table) {
            $table->id('idUsuario');
            $table->string('nomeUsuario');
            $table->string('senhaUsuario');
            $table->string('tipoUsuario');
            $table->string('emailUsuario')->unique(); // Adicionando a restrição UNIQUE
            $table->integer('tipoUsuario_id');
            $table->string('tipoUsuario_type');
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
        Schema::dropIfExists('tblusuarios');
    }
};
