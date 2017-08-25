<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->unsigned()->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('purpose');
            $table->string('type');
            $table->string('subtype');
            $table->string('city');
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('beds')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('kitchens')->nullable();
            $table->string('floor')->nullable();
            $table->string('area');
            $table->string('area_unit');
            $table->string('Label');
            $table->string('ConstructedArea');
            $table->string('OpenArea');
            $table->string('ConstructionYear');
            $table->string('OwnerShipStatus');
            $table->string('size1')->nullable();
            $table->string('size2')->nullable();
            $table->string('size3')->nullable();
            $table->string('size4')->nullable();
            $table->string('rate1')->nullable();
            $table->string('rate2')->nullable();
            $table->string('rate3')->nullable();
            $table->string('rate4')->nullable();
            $table->string('height')->nullable();
            $table->string('width')->nullable();
            $table->string('price')->nullable();
            $table->string('image0')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('pdf')->nullable();
            $table->string('video_url')->nullable();
            $table->date('propertexpire')->nullable();
            $table->string('remember_token')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
            $table->softDeletes();

           // $table->string('propety_number')->nullable();
           // $table->string('street')->nullable();
           // $table->string('sector')->nullable();
          //  $table->string('image')->nullable();
           // $table->string('video_url')->nullable();



        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property');
    }
}
