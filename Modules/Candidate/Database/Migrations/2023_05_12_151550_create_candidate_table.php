<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('source');
            $table->unsignedBigInteger('owner');
            $table->foreign('owner')->references('id')->on('users'); //Id usuario responsable
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');//Id usuario que ha creado el candidato
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate');
    }
};
