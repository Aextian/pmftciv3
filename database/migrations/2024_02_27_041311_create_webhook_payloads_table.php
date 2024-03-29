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
        Schema::create('webhook_payloads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('trans_id')->nullable();
            $table->longText('amount')->nullable();
            $table->longText('currency')->nullable();
            $table->longText('status')->nullable();
            $table->longText('reference')->nullable();
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
        Schema::dropIfExists('webhook_payloads');
    }
};
