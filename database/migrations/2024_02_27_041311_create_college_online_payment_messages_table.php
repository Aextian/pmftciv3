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
        Schema::create('college_online_payment_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('payment_id')->nullable()->index('college_online_payment_messages_payment_id_foreign');
            $table->unsignedBigInteger('admin_id')->nullable()->index('college_online_payment_messages_admin_id_foreign');
            $table->unsignedBigInteger('college_id')->nullable()->index('college_online_payment_messages_college_id_foreign');
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
        Schema::dropIfExists('college_online_payment_messages');
    }
};
