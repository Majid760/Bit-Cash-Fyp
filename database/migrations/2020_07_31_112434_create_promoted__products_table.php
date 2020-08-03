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
        Schema::create('promoted__products', function (Blueprint $table) {
            $table->bigIncrements('id')->primaryKey();
            $table->bigInteger('store_id')->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            $table->string('product_info');
            $table->string('unit_price');
            $table->string('image_link');
            $table->string('product_link');
            $table->string('store_info');
            $table->string('store_link');
            $table->integer('sold_quantity');
            $table->float('commission_rate');
            $table->float('commission');
            $table->float('relevant_market_commission_rate');
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
