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
        Schema::create('grammar_formations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('grammar_section_id')->unsigned();
            $table->string('affirmative');
            $table->string('negative');
            $table->string('question');
            $table->foreign('grammar_section_id')->references('id')->on('grammar_sections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grammar_formations');
    }
};
