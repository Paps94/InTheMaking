<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskManagmentIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('task_managment_issues', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name', 100);
           $table->text('description');
           $table->string('priority');
           $table->date('deadline');
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
         Schema::dropIfExists('task_managment_issues');
     }
}
