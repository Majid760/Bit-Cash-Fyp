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
            $table->string('product_id')->primaryKey();
            $table->string('category_id')->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('product_name');
            $table->string('product_url');
            $table->float('original_price');
            $table->float('sale_price');
            $table->string('commission');
            $table->timestamp('out_of_stock_date');
            $table->string('discount');
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
