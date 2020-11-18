<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLiveCertificatesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_certificates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('description_en');
            $table->string('description_ar');
            $table->string('company_en');
            $table->string('company_ar');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('live_certificates');
    }
}
