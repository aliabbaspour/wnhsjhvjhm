<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startup_scores', function (Blueprint $table) {
            $table->bigInteger('score_factor_id')->unsigned()->nullable();
            $table->bigInteger('referee')->unsigned()->nullable();
            $table->bigInteger('startup')->unsigned()->nullable();

            $table->foreign('score_factor_id')->references('ID')->on('score_factors');
            $table->foreign('referee')->references('ID')->on('users');
            $table->foreign('startup')->references('ID')->on('startups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('startup_scores');
    }
}
