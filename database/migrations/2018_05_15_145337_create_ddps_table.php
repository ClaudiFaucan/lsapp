<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDdpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ddps', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nom');
            $table->string('numero');
            $table->string('mail');
            $table->string('rappel');
            $table->string('projet')->nullable();
            $table->string('type_logement')->nullable();
            $table->string('etat')->nullable();
            $table->string('travaux')->nullable();
            $table->string('residence')->nullable();
            $table->string('meuble')->nullable();
            $table->float('loyer_attendu')->nullable();
            $table->string('ville')->nullable();
            $table->string('situation')->nullable();
            $table->float('prix')->nullable();
            $table->float('apport')->nullable();
            $table->string('secteur')->nullable();
            $table->string('contrat')->nullable();
            $table->float('revenus')->nullable();
            $table->string('secteurduo')->nullable();
            $table->string('contratduo')->nullable();
            $table->float('revenusduo')->nullable();
            $table->float('revenus_add')->nullable();
            $table->float('primes')->nullable();
            $table->float('loyer_actu')->nullable();
            $table->float('autre_credit')->nullable();
            

            


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
        Schema::dropIfExists('ddps');
    }
}
