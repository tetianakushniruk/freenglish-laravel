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
        Schema::create('tests_options', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tests_question_id')->unsigned();
            $table->string('option');
            $table->foreign('tests_question_id')->references('id')->on('tests_questions')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests_options');
    }
};
