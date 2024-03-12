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
        Schema::create('bank_details', function (Blueprint $table) {
            $table->Increments('bank_id');
            $table->string('bank_name');
            $table->string('bank_email');
            $table->string('bank_ph_no');
            $table->string('Address');
            $table->string('pin');
            $table->string('service_time');
            $table->string('reg_no');
            $table->string('owen_name');
            $table->string('owen_ph');
            $table->string('category');
            $table->string('owen_gov_id');
            $table->string('bank_reg_id');
            $table->string('password');
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
        Schema::dropIfExists('bank_details');
    }
};
