<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CerateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('refId');
            $table->boolean('isSeperete')->nullable();
            $table->string('preview');
            $table->text('htmlDesc');
            $table->string('etat')->nullable();
            $table->double('prixAchat')->nullable();
            $table->double('prixRevendeur')->nullable();
            $table->double('prixVente')->nullable();
            $table->integer('component')->nullable();
            $table->boolean('indexed');
            $table->integer('idStock');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
