<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::dropIfExists('startups');
        Schema::create('startups', function (Blueprint $table) {
            $table->bigIncrements('ID')->index();
            $table->bigInteger('status')->unsigned()->nullable();
            $table->char('name',255)->index();
            $table->char('website',255)->index()->nullable($value = true);
            $table->char('businessmodel',255)->nullable($value = true);
            $table->char('presentationvideo',255)->nullable($value = true);
            $table->date('startdate');
            $table->boolean('gotfund');
            $table->boolean('builtprototype');
            $table->integer('leader')->unique()->index();
            $table->date('signupdate')->index()->nullable($value = true);
            $table->integer('companion')->index();


        });
    /*  Schema::table('startups',function($table){
            $table->foreign('status')->references('ID')->on('statuses');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('startups');
    }
}
