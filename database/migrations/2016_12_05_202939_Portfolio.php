<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Portfolio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio', function(Blueprint $table){
          $table->increments('id');
          $table->string('Name');
          $table->string('Client review');
          $table->date('Project Date');
          $table->string('Technology used');
          $table->string('Project Link');
          $table->binary('Featured Images');
          $table->binary('Alt Image');
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
        Scheme::drop('portfolio');
    }
}
