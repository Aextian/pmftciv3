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
        Schema::table('shs_gcash_payments', function (Blueprint $table) {
            $table->foreign(['approved_by'])->references(['id'])->on('admins')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['declined_by'])->references(['id'])->on('admins')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('shs_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_prog_id'])->references(['id'])->on('shs_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('shs_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['verify_by'])->references(['id'])->on('admins')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_gcash_payments', function (Blueprint $table) {
            $table->dropForeign('shs_gcash_payments_approved_by_foreign');
            $table->dropForeign('shs_gcash_payments_declined_by_foreign');
            $table->dropForeign('shs_gcash_payments_sem_id_foreign');
            $table->dropForeign('shs_gcash_payments_std_prog_id_foreign');
            $table->dropForeign('shs_gcash_payments_sy_id_foreign');
            $table->dropForeign('shs_gcash_payments_verify_by_foreign');
        });
    }
};
