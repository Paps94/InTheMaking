<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('address');
          $table->string('postcode');
          $table->tinyInteger('flat_number')->nullable();
          $table->tinyInteger('floor')->nullable();
          $table->enum('type', ['house', 'apartment', 'studio']);
          $table->tinyInteger('size');
          $table->tinyInteger('no_of_bedrooms');
          $table->tinyInteger('no_of_bathrooms');
          $table->integer('purchase_price')->nullable();
          $table->integer('monthly_rent');
          $table->longText('description');
          $table->string('title');
          $table->date('last_renovation');
          $table->enum('heating_type', ['underfloor', 'radiator']);
          $table->enum('window_type', ['single', 'double']);
          $table->enum('bathroom_type', ['shower', 'bathtub']);
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
        Schema::dropIfExists('property');
    }
}
