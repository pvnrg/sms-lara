<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable(); 
            $table->string('title')->unique()->nullable();
            $table->text('description')->nullable();
            $table->text('perks&benifits')->nullable();
            $table->integer('job_category_id')->nullable(); 
            $table->integer('employement_type_id')->nullable(); 
            $table->integer('job_experience_id')->nullable(); 
            $table->text('location')->nullable(); 
            $table->string('salary')->nullable();
            $table->integer('upload_limit')->nullable(); 
            $table->integer('placement_fee')->nullable(); 
            $table->integer('fixed_fee')->nullable(); 
            $table->tinyInteger('status')->default(0);      
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
        Schema::dropIfExists('jobs');
    }
}
