<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefaultGroceryDataset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_grocery_dataset', function (Blueprint $table) {
            $table->id();            
            $table->string('categroy')->nullable();
            $table->string('product_name')->nullable();
            $table->string('weight_packing')->nullable();
            $table->string('description')->nullable();
            $table->string('price')->nullable();
            $table->string('currency')->nullable();
            $table->string('images')->nullable();
            $table->string('meta')->nullable();
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
        Schema::dropIfExists('default_grocery_dataset');
    }
}
