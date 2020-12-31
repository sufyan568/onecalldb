<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('model_type')->nullable();
            $table->string('model_id')->nullable();
            $table->string('uuid')->nullable();
            $table->string('collection_name')->nullable();
            $table->string('name')->nullable();
            $table->string('file_name')->nullable();
            $table->string('mime_type')->nullable();
            $table->string('disk')->nullable();
            $table->string('conversions_disk')->nullable();
            $table->string('size')->nullable();
            $table->string('manipulations')->nullable();
            $table->string('custom_properties')->nullable();
            $table->string('genrated_conversions')->nullable();
            $table->string('responsive_images')->nullable();
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
        Schema::dropIfExists('media');
    }
}
