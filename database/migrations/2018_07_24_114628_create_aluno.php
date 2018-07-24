<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_aluno', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('matricula')->unique();
            $table->string('email')->unique();
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cep');
            $table->string('uf');
            $table->timestamp('data_entrada');
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
        Schema::dropIfExists('tb_aluno');
    }
}
