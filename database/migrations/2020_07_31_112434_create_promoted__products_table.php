<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promoted_products', function (Blueprint $table) {
            $table->bigIncrements('id')->primaryKey();
            $table->string('product_info')->unique();
            $table->float('unit_price');
            $table->string('image_link')->unique();
            $table->string('product_link')->unique();
            $table->string('store_info');
            $table->string('store_link');
            $table->integer('sold_quantity');
            $table->integer('commission_rate');
            $table->float('commission');
            $table->integer('relevant_market_commission_rate');
            $table->float('relevant_market_commission');
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
        Schema::dropIfExists('promoted__products');
    }
}