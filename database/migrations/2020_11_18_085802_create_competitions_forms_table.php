<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompetitionsFormsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('mobile');
            $table->string('note');
            $table->string('address');
            $table->integer('competition_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('competition_id')->references('id')->on('competitions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('competitions_forms');
    }
}
