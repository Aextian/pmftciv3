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
        Schema::create('school_cash_expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cashier_id')->nullable()->index('school_cash_expenses_cashier_id_foreign');
            $table->unsignedBigInteger('replenishment_id')->nullable()->index('school_cash_expenses_replenishment_id_foreign');
            $table->string('voucher_code')->nullable();
            $table->mediumText('description');
            $table->decimal('amount', 20)->default(0);
            $table->date('expense_date')->nullable();
            $table->boolean('is_replenish')->default(false);
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
        Schema::dropIfExists('school_cash_expenses');
    }
};
