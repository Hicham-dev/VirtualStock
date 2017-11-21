<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCMlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('CMlist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_marque')->nullable();
            $table->integer('id_cat');
            $table->boolean('product_year');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('CMlist');
        
    }
}
