<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigInteger('ID')->unsigned()->nullable()->unique();
            $table->char('first_name',64);
            $table->char('last_name',64);
            $table->char('email',64)->unique()->index();
            $table->char('phone_number',64)->unique()->index();
            $table->date('birthdate')->nullable();

            $table->primary('ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
