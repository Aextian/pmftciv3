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
        Schema::create('school_bank_to_cashiers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bank_id')->nullable()->index('school_bank_to_cashiers_bank_id_foreign');
            $table->unsignedBigInteger('cashier_id')->nullable()->index('school_bank_to_cashiers_cashier_id_foreign');
            $table->string('voucher_code')->nullable();
            $table->decimal('amount', 20)->default(0);
            $table->date('replenish_date');
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
        Schema::dropIfExists('school_bank_to_cashiers');
    }
};
