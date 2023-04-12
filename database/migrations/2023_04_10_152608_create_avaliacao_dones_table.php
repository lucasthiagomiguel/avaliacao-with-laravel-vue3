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
        Schema::create('avaliacao_dones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('id_gestor');
            $table->integer('id_users');
            $table->integer('pergunta1');
            $table->integer('pergunta2');
            $table->integer('pergunta3');
            $table->integer('pergunta4');
            $table->integer('pergunta5');
            $table->integer('pergunta6');
            $table->integer('pergunta7');
            $table->integer('pergunta8');
            $table->integer('pergunta9');
            $table->integer('pergunta10');
            $table->integer('pergunta11');
            $table->integer('pergunta12');
            $table->integer('total_performance');
            $table->integer('total_competencia');
            $table->string('quadrante');
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
        Schema::dropIfExists('avaliacao_dones');
    }
};
