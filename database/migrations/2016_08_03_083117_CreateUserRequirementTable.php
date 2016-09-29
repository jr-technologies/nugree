<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRequirementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_requirement', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('name');
            $table->string('email');
            $table->string('phone');
            $table->string('subject');
            $table->string('requirement');
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
        Schema::drop('user_requirement');
    }
}
