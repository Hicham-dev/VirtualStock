<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('commande', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idVendeur');
            $table->integer('idachteur');
            $table->date('dateCommande');
            $table->integer('idRef');
            $table->integer('Quantite');
            $table->double('prix');
            $table->boolean('etatVendeur');
            $table->boolean('etatachteur');
            $table->boolean('etat');
            $table->integer('idPaiement');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('commande');
        
    }
}
