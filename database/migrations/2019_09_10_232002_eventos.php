<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('dataEvento');
            $table->string('imagem')->nullable();
            $table->string('titulo');
            $table->string('descricao');
            $table->string('CEP')->nullable();
            $table->string('endereco');
            $table->string('cidade');
            $table->string('estado');
            $table->string('inicioEvento');
            $table->string('fimEvento');
            $table->unsignedBigInteger('fk_categorias')->nullable();
            $table->unsignedBigInteger('fk_users')->nullable();
            $table->timestamps();
            $table->foreign('fk_categorias')->references('id')->on('categorias');
            $table->foreign('fk_users')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
