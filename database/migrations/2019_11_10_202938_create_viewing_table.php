<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viewing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('property_id');
            $table->string('agent_id');
            $table->string('name');
            $table->string('email');
            $table->integer('phone_number');
            $table->enum('purpose', ['rent', 'purchase']);
            $table->timestamp('datetime');
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
        Schema::dropIfExists('viewing');
    }
}
