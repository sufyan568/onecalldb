<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_files', function (Blueprint $table) {
            $table->id();
            $table->string('message_id')->nullable();
            $table->string('file')->nullable();
            $table->string('meta')->nullable();
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
        Schema::dropIfExists('message_files');
    }
}
