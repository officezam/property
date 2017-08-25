<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('user_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('DisplayName')->unique()->nullable();
            $table->integer('BusinessType');
            $table->string('city');
            $table->string('state')->nullable();
            $table->integer('zip')->nullable();
            $table->integer('package_id')->nullable();
            $table->string('description')->nullable();
            $table->string('company_about')->nullable();
            $table->string('payment_state')->nullable();
            $table->string('payment_zip')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('cell_phone');
            $table->string('work_phone')->nullable();
            $table->string('fax_phone')->nullable();
            $table->string('email')->unique();
            $table->string('email2')->nullable();
            $table->boolean('isActive')->default(0)->commit('0 for Not Active ,1 For Active');
            $table->string('type')->nullable();
            $table->string('image');
            $table->string('password');
            $table->string('remember_token')->nullable();
            $table->dateTime('password_expire_date')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->dateTime('last_login')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('permanent')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('background_image')->nullable();
            $table->string('address')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('googleplus')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('ceo_name')->nullable();
            $table->string('ceo_image')->nullable();
            $table->longText('ceo_description')->nullable();
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
        Schema::dropIfExists('users');
    }
}
