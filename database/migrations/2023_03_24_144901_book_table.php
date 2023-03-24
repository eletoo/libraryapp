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
        Schema::create('book', function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->integer('author_id')->unsigned();
        });

        // modifica una tabella già esistente
        Schema::table('book', function (Blueprint $table){
            $table->foreign('author_id')->references('id')->on('author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
};
