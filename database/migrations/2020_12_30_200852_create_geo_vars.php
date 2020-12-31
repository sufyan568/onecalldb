<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeoVars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geo_vars', function (Blueprint $table) {
            $table->id();
            $table->string('datetime')->nullable();
            $table->string('comments')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('lat1')->nullable();
            $table->string('lng1')->nullable();
            $table->string('lat2')->nullable();
            $table->string('lng2')->nullable();
            $table->string('tpl_var')->nullable();
            $table->string('tpl_val')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geo_vars');
    }
}
