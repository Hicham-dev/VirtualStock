<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompatibilityCpuGenerationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compatibility_cpu_generation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('compatibility_id');
            $table->integer('cpu_generation');
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compatibility_cpu_generation');   
    }
}
