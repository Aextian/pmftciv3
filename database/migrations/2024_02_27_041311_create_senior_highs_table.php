<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senior_highs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('ext_name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('email_verified')->default(0);
            $table->string('email_verification_code')->nullable();
            $table->integer('is_dark_mode')->default(0);
            $table->integer('is_active')->default(1);
            $table->string('public_ip', 225)->nullable();
            $table->string('mac_address', 225)->nullable();
            $table->string('longitude', 225)->nullable();
            $table->string('latitude', 225)->nullable();
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
        Schema::dropIfExists('senior_highs');
    }
};
