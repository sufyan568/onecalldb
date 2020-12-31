<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_account', function (Blueprint $table) {
            $table->id();
            $table->string('datetime')->nullable();
            $table->string('business_id')->nullable();
            $table->string('debit')->nullable();
            $table->string('credit')->nullable();
            $table->string('balance')->nullable();
            $table->string('currency')->nullable();
            $table->string('discription')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_account');
    }
}
