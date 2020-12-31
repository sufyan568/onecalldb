<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_log', function (Blueprint $table) {
            $table->id();
             $table->string('datetime')->nullable();
            $table->string('tag')->nullable();
            $table->string('to')->nullable();
            $table->string('message')->nullable();
            $table->string('api_request')->nullable();
            $table->string('api_response')->nullable();
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
        Schema::dropIfExists('sms_log');
    }
}
