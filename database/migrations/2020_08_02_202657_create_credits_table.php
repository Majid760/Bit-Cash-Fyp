<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->bigIncrements('id')->primaryKey();
            $table->bigInteger('payment_account_id')->foreign('payment_account_id')->references('id')->on('payment_accounts')->onDelete('cascade');
            $table->string('card_holder_name');
            $table->string('card_number')->unique();
            $table->string('card_cvv');
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
        Schema::dropIfExists('credits');
    }
}
