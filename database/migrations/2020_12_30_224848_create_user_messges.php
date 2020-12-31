<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMessges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_messges', function (Blueprint $table) {
            $table->id();
            $table->string('datetime')->nullable();
            $table->string('to')->nullable();
            $table->string('from')->nullable();
            $table->string('message')->nullable();
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
        Schema::dropIfExists('user_messges');
    }
}
