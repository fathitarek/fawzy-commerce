<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInfoBankFormsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_bank_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('mobile');
            $table->string('note');
            $table->string('address');
            $table->integer('bank_informations_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('bank_informations_id')->references('id')->on('bank_informations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('info_bank_forms');
    }
}
