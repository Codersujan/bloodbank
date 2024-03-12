<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_details', function (Blueprint $table) {
            $table->increments('blood_id');
            $table->string('bank_id');
            $table->string('APOS');
            $table->string('BPOS');
            $table->string('OPOS');
            $table->string('ABPOS');
            $table->string('ANEG');
            $table->string('BNEG');
            $table->string('ONEG');
            $table->string('ABNEG');
            $table->string('message');
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
        Schema::dropIfExists('blood_details');
    }
};
