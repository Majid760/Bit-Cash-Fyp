<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImageUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_image_urls', function (Blueprint $table) {
            $table->bigIncrements('id')->primaryKey();
            $table->bigInteger('product_id')->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('product_img_url');
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
        Schema::dropIfExists('product__image__urls');
    }
}
