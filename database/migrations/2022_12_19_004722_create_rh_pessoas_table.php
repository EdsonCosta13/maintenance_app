<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRhPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rh_pessoas', function (Blueprint $table) {
            $table->increments('rh_pessoa_id');
            $table->string('nome')->nullable();
            $table->string('sobrenome')->nullable();
            $table->string('cpf')->nullable();
            $table->date('data_nascimento')->nullable();

            $table->unsignedBigInteger('grl_genero_id')->nullable();
            $table->unsignedBigInteger('grl_estado_civil_id')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('rh_pessoas');
    }
}
