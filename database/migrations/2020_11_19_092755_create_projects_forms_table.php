<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsFormsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('mobile');
            $table->string('address');
            $table->string('note');
            $table->integer('project_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects_forms');
    }
}
