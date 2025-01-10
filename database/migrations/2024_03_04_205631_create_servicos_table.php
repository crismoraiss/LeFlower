<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicosTable extends Migration
{
    public function up()
    {
        Schema::create('tblservicos', function (Blueprint $table) {
            $table->bigIncrements('idServico');
            $table->string('tipoServico', 40);
            $table->string('nomeServico', 50)->nullable();
            $table->time('duracaoServico');
            $table->text('descricaoServico')->nullable();
            $table->string('valorServico', 40);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblservicos');
    }
};

