<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorySearchIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_search_index', function (Blueprint $table) {
            $table->id();
            $table->string('last_updated')->nullable();
            $table->string('category')->nullable();
            $table->string('keywords')->nullable();
            $table->string('meta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_search_index');
    }
}
