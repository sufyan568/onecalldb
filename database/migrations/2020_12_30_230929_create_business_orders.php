<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_orders', function (Blueprint $table) {
            $table->id();
            $table->string('datetime')->nullable();
            $table->string('buisness_id')->nullable();
            $table->string('buisness_account_id')->nullable();
            $table->string('from_username')->nullable();
            $table->string('category')->nullable();
            $table->string('query_id')->nullable();
            $table->string('delivery_id')->nullable();
            $table->string('comments')->nullable();
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
        Schema::dropIfExists('business_orders');
    }
}
