<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_seperete')->nullable();
            $table->string('preview');
            $table->text('html_desc');
            $table->string('state')->nullable();
            $table->double('purchase_price')->nullable();
            $table->double('reseller_price')->nullable();
            $table->double('sell_price')->nullable();
            $table->boolean('indexed');
            $table->integer('configuration_id');
            $table->integer('reference_id');
            $table->integer('stock_id');
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
        Schema::dropIfExists('articles');
    }
}
