<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_docs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property_id')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('pdf')->nullable();
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
        Schema::dropIfExists('property_docs');
    }
}
