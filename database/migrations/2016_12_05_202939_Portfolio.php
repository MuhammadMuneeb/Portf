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
          $table->string('Client_Review');
          $table->date('Project_Date');
          $table->string('Technology_used');
          $table->string('Project_Link');
          $table->string('Featured_Image_URL');
          $table->string('Alt_Image_URL');
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
        Schema::drop('portfolio');
    }
}
