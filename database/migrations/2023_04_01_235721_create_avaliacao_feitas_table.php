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
        Schema::create('avaliacao_feitas', function (Blueprint $table) {
            $table->id();
            $table->string('answers');
            $table->boolean('status');
            $table->integer('done');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('id_users_gestor');
            $table->float('value_answers_performace');
            $table->float('value_answers_desempenho');
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
        Schema::dropIfExists('avaliacao_feitas');
    }
};
