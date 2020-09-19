<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserClicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_clicks', function (Blueprint $table) {
            $table->bigIncrements('id')->primaryKey();
            $table->bigInteger('user_id')->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('product_id')->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('city');
            $table->string('country');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('continentName');
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
        Schema::dropIfExists('user_clicks');
    }
}
