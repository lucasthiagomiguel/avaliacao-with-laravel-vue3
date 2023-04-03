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
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('id_users');
            $table->boolean('value_answers');
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
