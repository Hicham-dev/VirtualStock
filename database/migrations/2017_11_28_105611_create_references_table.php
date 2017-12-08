<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('references', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference');
            $table->integer('compatibily_id');
            $table->integer('default_configuration_id')->nullable();
            $table->integer('production_year')->nullable();
            $table->string('description')->nullable();
            $table->integer('association_category_brands_id');
            $table->string('image_path')->nullable();
            $table->integer('physical_cpus_number')->default(1);
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
        Schema::dropIfExists('references');
    }
}
