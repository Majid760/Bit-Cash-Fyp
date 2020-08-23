<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveOrderTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_order_trackings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('OrderTime')->nullable();
            $table->string('TransactionTime')->nullable();
            $table->string('OrderID')->nullable();
            $table->string('SubOrderID')->nullable();
            $table->string('ProductId')->nullable();
            $table->string('ProductURL')->nullable();
            $table->string('OrderStatus')->nullable();
            $table->string('CommissionRate')->nullable();
            $table->string('PaymentAmount')->nullable();
            $table->string('EstimatedCommission')->nullable();
            $table->string('FinalPaymentAmount')->nullable();
            $table->string('Commission')->nullable();
            $table->string('TrackingId')->nullable();
            $table->string('DP')->nullable();
            $table->string('AF')->nullable();
            $table->string('CN')->nullable();
            $table->string('CV')->nullable();
            $table->string('basicCommissionRate')->nullable();
            $table->string('IncentiveCommissionRatebyGMV')->nullable();
            $table->string('IncentiveCommissionRatenewbuyer')->nullable();
            $table->string('device')->nullable();
            $table->string('country')->nullable();
            $table->string('category_id')->nullable();
            $table->string('publisher_level')->nullable();
            $table->string('is_aff_product')->nullable();
            $table->string('newbuyer')->nullable();
            $table->string('is_hot_product')->nullable();
            $table->string('new_buyer_bonus')->nullable();
            $table->string('type of income')->nullable();
            $table->string('currency')->nullable();
            $table->string('originalFinalPaymentAmount')->nullable();
            $table->string('exchange rate')->nullable();
            $table->string('Seller Type')->nullable();
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
        Schema::dropIfExists('live_order_trackings');
    }
}
