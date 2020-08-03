<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_accounts', function (Blueprint $table) {
            $table->bigIncrements('id')->primaryKey();
            $table->bigInteger('user_id')->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('credit_id')->foreign('credit_id')->references('id')->on('credits')->onDelete('cascade');
            $table->string('account_number')->unique()->max(24);
            $table->float('pending_amount');
            $table->float('approved_amount');
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
        Schema::dropIfExists('payment_accounts');
    }
}
