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
        Schema::create('performanceTest', function (Blueprint $table) {
            $table->id();
            $table->string('questions');
            $table->boolean('status');
            $table->boolean('typeTest');//0 Performance; 1 competencias
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
        Schema::dropIfExists('performanceTest');
    }
};
