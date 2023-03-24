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
        Schema::create('author', function (Blueprint $table) {
            $table->id(); 
            $table->string('firstname');
            $table->string('lastname');
        });

        //potremmo creare una migration per ogni tabella senza mettere le chiavi esterne e infine una migration
        //unica in cui mettiamo solo i vincoli di chiave 

        //altrimenti potremmo creare un'unica migration con diversi Schema::create (uno per tabella) e alla fine uno 
        //Schema::table in cui specificare tutti i vincoli di chiave
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author');
    }
};
