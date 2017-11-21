<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('facture', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idArticle');
            $table->double('prixVente');
            $table->date('dateVente');
            $table->integer('idClient');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('facture');
        
    }
}
