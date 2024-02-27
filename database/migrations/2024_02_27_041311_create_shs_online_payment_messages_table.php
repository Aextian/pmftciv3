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
        Schema::create('shs_online_payment_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('payment_id')->nullable()->index('shs_online_payment_messages_payment_id_foreign');
            $table->unsignedBigInteger('admin_id')->nullable()->index('shs_online_payment_messages_admin_id_foreign');
            $table->unsignedBigInteger('shs_id')->nullable()->index('shs_online_payment_messages_shs_id_foreign');
            $table->longText('message')->nullable();
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
        Schema::dropIfExists('shs_online_payment_messages');
    }
};
