<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrlManutencaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grl_manutencaos', function (Blueprint $table) {
            $table->increments('grl_manutencao_id');
            $table->date('data')->nullable();
            $table->time('hora')->nullable();
            $table->enum('estado',['Pendente','Andamento','Concluida','Cancelada'])->nullable();

            $table->unsignedBigInteger('grl_veiculo_id')->nullable();


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
        Schema::dropIfExists('grl_manutencaos');
    }
}
