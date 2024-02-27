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
        Schema::table('college_teacher_lesson_attendances', function (Blueprint $table) {
            $table->foreign(['lesson_id'])->references(['id'])->on('college_teacher_subject_lessons')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['lesson_sched_id'])->references(['id'])->on('college_teacher_subject_lesson_scheds')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('college_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['teacher_id'])->references(['id'])->on('teachers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_teacher_lesson_attendances', function (Blueprint $table) {
            $table->dropForeign('college_teacher_lesson_attendances_lesson_id_foreign');
            $table->dropForeign('college_teacher_lesson_attendances_lesson_sched_id_foreign');
            $table->dropForeign('college_teacher_lesson_attendances_sem_id_foreign');
            $table->dropForeign('college_teacher_lesson_attendances_sy_id_foreign');
            $table->dropForeign('college_teacher_lesson_attendances_teacher_id_foreign');
        });
    }
};
