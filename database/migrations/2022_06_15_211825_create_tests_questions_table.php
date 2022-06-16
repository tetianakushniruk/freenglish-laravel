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
        Schema::create('tests_questions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tests_topic_id')->unsigned();
            $table->string('question');
            $table->string('answer');
            $table->foreign('tests_topic_id')->references('id')->on('tests_topics')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests_questions');
    }
};
