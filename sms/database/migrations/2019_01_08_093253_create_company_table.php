<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('logo')->nullable();
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('specialization_id')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('contact')->nullable();
            $table->string('email_address')->nullable();
            $table->text('about')->nullable();
            $table->string('website')->nullable();
            $table->string('year_founded')->nullable();
            $table->boolean('verified')->nullable();
            $table->softDeletes();
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
        //
        Schema::dropIfExists('company');
    }
}
