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
        Schema::table('college_online_payment_messages', function (Blueprint $table) {
            $table->foreign(['admin_id'])->references(['id'])->on('admins')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['college_id'])->references(['id'])->on('colleges')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['payment_id'])->references(['id'])->on('college_gcash_payments')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_online_payment_messages', function (Blueprint $table) {
            $table->dropForeign('college_online_payment_messages_admin_id_foreign');
            $table->dropForeign('college_online_payment_messages_college_id_foreign');
            $table->dropForeign('college_online_payment_messages_payment_id_foreign');
        });
    }
};
