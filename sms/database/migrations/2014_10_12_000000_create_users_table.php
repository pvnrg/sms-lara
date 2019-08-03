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
            $table->string('account_no')->default('00');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->longText('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('passport')->nullable(); //file
            $table->string('proof_of_residency')->nullable(); //file
            $table->string('tax_from')->nullable();
            $table->boolean('is_corporate')->nullable(); //checkbox
            $table->string('certificate_of_incorpo')->nullable(); //file
            $table->string('articals_memorandoms')->nullable(); //file
            $table->string('cert_of_incumbency')->nullable(); //file
            $table->string('cert_of_good_standing')->nullable(); //file
            $table->integer('fees_id')->nullable();
            $table->integer('client_class_id')->nullable();
            $table->integer('beneficial_owner_id')->nullable();        
            $table->softDeletes();
            $table->rememberToken();
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
