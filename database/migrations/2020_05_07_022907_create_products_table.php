<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('serial');
            $table->bigInteger('product_id')->primaryKey()->unique();
            $table->bigInteger('category_id')->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('product_name');
            $table->string('product_url')->unique();
            $table->float('original_price');
            $table->float('sale_price')->nullable();
            $table->string('commission');
            $table->string('out_of_stock_date');
            $table->string('discount')->nullable();
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
        Schema::dropIfExists('products');
    }
}
