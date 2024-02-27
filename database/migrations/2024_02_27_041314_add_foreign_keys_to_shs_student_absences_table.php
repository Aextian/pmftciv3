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
        Schema::table('shs_student_absences', function (Blueprint $table) {
            $table->foreign(['sem_id'])->references(['id'])->on('shs_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['shs_std_sub'])->references(['id'])->on('shs_student_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('shs_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['tpss_id'])->references(['id'])->on('shs_teacher_progsubsecs')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_student_absences', function (Blueprint $table) {
            $table->dropForeign('shs_student_absences_sem_id_foreign');
            $table->dropForeign('shs_student_absences_shs_std_sub_foreign');
            $table->dropForeign('shs_student_absences_sy_id_foreign');
            $table->dropForeign('shs_student_absences_tpss_id_foreign');
        });
    }
};
