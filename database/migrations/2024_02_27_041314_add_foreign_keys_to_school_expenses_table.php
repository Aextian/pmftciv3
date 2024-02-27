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
        Schema::table('school_expenses', function (Blueprint $table) {
            $table->foreign(['bank_id'])->references(['id'])->on('school_bank_accounts')->onUpdate('NO ACTION')->onDelete('SET NULL');
            $table->foreign(['encoder_id'])->references(['id'])->on('admins')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('school_expenses', function (Blueprint $table) {
            $table->dropForeign('school_expenses_bank_id_foreign');
            $table->dropForeign('school_expenses_encoder_id_foreign');
        });
    }
};
