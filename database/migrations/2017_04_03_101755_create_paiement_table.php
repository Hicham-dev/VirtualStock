<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaiementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('Paiement', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nbrTranches');
            $table->string('Type');
            $table->double('prixAchat');
            $table->date('dateAchat');
            $table->double('prixVente');
            $table->date('dateVente');
            $table->integer('idCompte');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('Paiement');
        
    }
}
