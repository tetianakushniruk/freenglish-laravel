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
        Schema::create('grammar_examples', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('section_id')->unsigned();
            $table->string('example');
            $table->foreign('section_id')->references('id')->on('grammar_sections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grammar_examples');
    }
};
