<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_profile', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('datetime')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('latlng')->nullable();
            $table->string('discription')->nullable();
            $table->string('products_services')->nullable();
            $table->string('keywords')->nullable();
            $table->string('comments')->nullable();
            $table->string('published_id')->nullable();
            $table->string('currency')->nullable();
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
        Schema::dropIfExists('business_profile');
    }
}
