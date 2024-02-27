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
        Schema::table('shs_student_ftofs', function (Blueprint $table) {
            $table->foreign(['lesson_id'])->references(['id'])->on('shs_teacher_progsubsec_lessons')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['lesson_sched_id'])->references(['id'])->on('shs_progsubsec_lesson_scheds')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('shs_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('shs_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_student_ftofs', function (Blueprint $table) {
            $table->dropForeign('shs_student_ftofs_lesson_id_foreign');
            $table->dropForeign('shs_student_ftofs_lesson_sched_id_foreign');
            $table->dropForeign('shs_student_ftofs_sem_id_foreign');
            $table->dropForeign('shs_student_ftofs_sy_id_foreign');
        });
    }
};
