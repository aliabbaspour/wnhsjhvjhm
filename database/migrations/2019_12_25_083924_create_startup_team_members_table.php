<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupTeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('startup_team_members');

        Schema::create('startup_team_members', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->char('linkedin',65);
            $table->integer('averagetimespending');
            $table->bigInteger('education')->unsigned()->nullable();
            $table->char('skill',64)->nullable();
            $table->char('role',64);
            $table->bigInteger('startup_id')->nullable()->unsigned();


            //$table->foreign('education')->references('ID')->on('education');
            $table->foreign('startup_id')->references('ID')->on('startups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('startup_team_members');
    }
}
