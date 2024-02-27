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
        Schema::table('school_bank_to_cashiers', function (Blueprint $table) {
            $table->foreign(['bank_id'])->references(['id'])->on('school_bank_accounts')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['cashier_id'])->references(['id'])->on('school_expense_cash_registers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('school_bank_to_cashiers', function (Blueprint $table) {
            $table->dropForeign('school_bank_to_cashiers_bank_id_foreign');
            $table->dropForeign('school_bank_to_cashiers_cashier_id_foreign');
        });
    }
};
