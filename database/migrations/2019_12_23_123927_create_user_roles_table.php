<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //Schema::dropIfExists('user_roles');
        Schema::create('user_roles', function (Blueprint $table) {
            $table->bigInteger('role_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
        });
        Schema::table('user_roles',function($table){
            $table->foreign('role_id')->references('ID')->on('roles');
            $table->foreign('user_id')->references('ID')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
}
