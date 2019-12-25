<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupLegalDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startup_legal_documents', function (Blueprint $table) {
            $table->bigInteger('startup')->unsigned()->nullable();
            $table->bigInteger('legal_document')->unsigned()->nullable();
            $table->char('file_name',255)->unique()->index();
        });
        Schema::table('startup_legal_documents',function($table){
            $table->foreign('startup')->references('ID')->on('startups');
            $table->foreign('legal_document')->references('ID')->on('legal_documents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('startup_legal_documents');
    }
}
