<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupCategouriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startup_categouries', function (Blueprint $table) {
            $table->bigIncrements('categoury_id')->nullable();
            $table->bigInteger('startup_traking_code')->unsigned()->nullable();

            $table->foreign('categoury_id')->references('ID')->on('categouries');
            $table->foreign('startup_traking_code')->references('ID')->on('startups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('startup_categouries');
    }
}
