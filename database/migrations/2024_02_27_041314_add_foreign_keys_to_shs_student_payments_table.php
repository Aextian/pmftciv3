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
        Schema::table('shs_student_payments', function (Blueprint $table) {
            $table->foreign(['std_id'])->references(['id'])->on('shs_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_prog_id'])->references(['id'])->on('shs_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['user_id'])->references(['id'])->on('senior_highs')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_student_payments', function (Blueprint $table) {
            $table->dropForeign('shs_student_payments_std_id_foreign');
            $table->dropForeign('shs_student_payments_std_prog_id_foreign');
            $table->dropForeign('shs_student_payments_user_id_foreign');
        });
    }
};
