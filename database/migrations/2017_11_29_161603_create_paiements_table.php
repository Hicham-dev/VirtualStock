<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number_tranches');
            $table->string('paiement_type');
            $table->integer('tranches_count')->default(1);
            $table->double('purchase_price');
            $table->date('purchase_date');
            $table->double('sell_price');
            $table->date('sell_date');
            $table->integer('seller_id');
            $table->integer('buyer_id');
            $table->integer('paiement_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paiements');
    }
}
