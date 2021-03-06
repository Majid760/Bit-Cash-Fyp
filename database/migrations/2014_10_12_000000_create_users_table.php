<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->primaryKey();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('image_link');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('about')->length(255);
            $table->boolean('status');
            $table->boolean('is_checked');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
