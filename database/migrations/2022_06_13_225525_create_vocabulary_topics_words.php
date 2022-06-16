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
        Schema::create('vocabulary_topics_words', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('vocabulary_topic_id')->unsigned();
            $table->foreign('vocabulary_topic_id')->references('id')->on('vocabulary_topics')->onDelete('cascade');

            $table->bigInteger('vocabulary_word_id')->unsigned();
            $table->foreign('vocabulary_word_id')->references('id')->on('vocabulary_words')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vocabulary_topics_words');
    }
};
