<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLiveCertificateFormsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_certificate_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('mobile');
            $table->string('note');
            $table->string('address');
            $table->integer('live_certificates_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('live_certificates_id')->references('id')->on('live_certificates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('live_certificate_forms');
    }
}
