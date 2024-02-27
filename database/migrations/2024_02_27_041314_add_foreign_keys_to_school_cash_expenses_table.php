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
        Schema::table('school_cash_expenses', function (Blueprint $table) {
            $table->foreign(['cashier_id'])->references(['id'])->on('school_expense_cash_registers')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['replenishment_id'])->references(['id'])->on('school_bank_to_cashiers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('school_cash_expenses', function (Blueprint $table) {
            $table->dropForeign('school_cash_expenses_cashier_id_foreign');
            $table->dropForeign('school_cash_expenses_replenishment_id_foreign');
        });
    }
};
