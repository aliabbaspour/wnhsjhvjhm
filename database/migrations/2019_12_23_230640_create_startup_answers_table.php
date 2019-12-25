<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('startup_answers');

        Schema::create('startup_answers', function (Blueprint $table) {
            $table->bigInteger('startup')->unsigned()->nullable();
            $table->bigInteger('question')->unsigned()->nullable();
            $table->char('answer',255);
            $table->foreign('startup')->references('ID')->on('startups');
            $table->foreign('question')->references('ID')->on('questions');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('startup_answers');
    }
}
