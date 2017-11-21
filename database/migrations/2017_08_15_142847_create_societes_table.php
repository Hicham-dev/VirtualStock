<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('raisonSociale');
            $table->string('adresse');
            $table->string('mapLat');
            $table->string('mapInt');
            $table->string('telephone1');
            $table->string('telephone2');
            $table->string('fax');
            $table->string('email');
            $table->string('logo');
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
        Schema::dropIfExists('societes');
    }
}
