<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
          $table->increments('id');
          $table->string('birthdate');
          $table->string('phone');
          $table->string('details');
          $table->string('email');

          $table->string('skype')->nullable();
          $table->string('website');
          $table->string('facebook');
          $table->string('twitter');
          $table->string('gmail');
          $table->string('linkedin');
          $table->string('image');
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
        Schema::dropIfExists('abouts');
    }
}
