<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('FirstName');
            $table->string('lastname');
            $table->string('DisplayName');
            $table->string('emailAddress');
            $table->string('ConatctNumber')->nullable();
            $table->string('ConatctNumber1');
            $table->string('ConatctNumber2')->nullable();
            $table->string('password');
            $table->string('DomainName')->nullable();
            $table->string('country_id')->nullable();
            $table->string('CityName')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->string('AgencyName')->nullable();
            $table->string('type')->nullable();
            $table->string('BusinessType')->commit('1 For Indivdual. 2 for Real State Or Business')->nullable();
            $table->string('package_type')->nullable();
            $table->string('token')->nullable();
            $table->boolean('isActive')->default(0)->commit('0 for Not Active ,1 For Active');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
