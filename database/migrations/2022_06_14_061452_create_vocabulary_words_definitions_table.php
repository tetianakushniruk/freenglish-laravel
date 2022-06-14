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
        Schema::create('vocabulary_words_definitions', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('vocabulary_word_id')->unsigned();
            $table->foreign('vocabulary_word_id')->references('id')->on('vocabulary_words')->onDelete('cascade');

            $table->bigInteger('vocabulary_definition_id')->unsigned();
            $table->foreign('vocabulary_definition_id')->references('id')->on('vocabulary_definitions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vocabulary_words_definitions');
    }
};
