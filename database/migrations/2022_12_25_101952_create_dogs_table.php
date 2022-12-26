<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('breed')->nullable();
            $table->text('sex')->nullable();
            $table->text('color')->nullable();
            $table->text('date_of_birth')->nullable();
            $table->text('breeder')->nullable();
            $table->text('owner')->nullable();
            $table->text('reg_no')->nullable();
            $table->text('registered')->nullable();
            $table->text('registrar')->nullable();
            $table->text('dog_breed_group_id')->nullable();
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
        Schema::dropIfExists('dogs');
    }
}
