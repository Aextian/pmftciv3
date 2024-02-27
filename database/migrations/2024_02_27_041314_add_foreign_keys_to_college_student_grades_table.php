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
        Schema::table('college_student_grades', function (Blueprint $table) {
            $table->foreign(['college_student_subject_id'])->references(['id'])->on('college_student_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['grading_period_id'])->references(['id'])->on('college_grading_periods')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_id'])->references(['id'])->on('college_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
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
        Schema::table('college_student_grades', function (Blueprint $table) {
            $table->dropForeign('college_student_grades_college_student_subject_id_foreign');
            $table->dropForeign('college_student_grades_grading_period_id_foreign');
            $table->dropForeign('college_student_grades_sem_id_foreign');
            $table->dropForeign('college_student_grades_std_id_foreign');
            $table->dropForeign('college_student_grades_sy_id_foreign');
            $table->dropForeign('college_student_grades_tpss_id_foreign');
        });
    }
};
