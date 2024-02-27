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
        Schema::table('college_student_absences', function (Blueprint $table) {
            $table->foreign(['college_std_sub'])->references(['id'])->on('college_student_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('college_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['tpss_id'])->references(['id'])->on('college_teacher_progsubsecs')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_student_absences', function (Blueprint $table) {
            $table->dropForeign('college_student_absences_college_std_sub_foreign');
            $table->dropForeign('college_student_absences_sem_id_foreign');
            $table->dropForeign('college_student_absences_sy_id_foreign');
            $table->dropForeign('college_student_absences_tpss_id_foreign');
        });
    }
};
