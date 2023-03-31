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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('admisao');
            $table->string('empresa');
            $table->string('email_pessoal');
            $table->string('email_corporativo');
            $table->string('escolaridade');
            $table->string('certificacoes');
            $table->string('celular');
            $table->string('cargo');
            $table->string('funcao');
            $table->string('tipo_contratacao');
            $table->string('salario');
            $table->string('equipe');
            $table->string('ferias');
            $table->string('alteracao_cargo_salario_ferias');
            $table->string('observacao');
            $table->string('demissao');
            $table->string('motivo');
            $table->string('password');
            $table->boolean('status');
            $table->unsignedBigInteger('perfil');
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
        Schema::dropIfExists('users');
    }
};
