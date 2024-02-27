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
        Schema::table('college_lesson_schedule_quizzes', function (Blueprint $table) {
            $table->foreign(['lesson_sched_id'])->references(['id'])->on('college_teacher_subject_lesson_scheds')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['quiz_id'])->references(['id'])->on('college_subject_quizzes')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_lesson_schedule_quizzes', function (Blueprint $table) {
            $table->dropForeign('college_lesson_schedule_quizzes_lesson_sched_id_foreign');
            $table->dropForeign('college_lesson_schedule_quizzes_quiz_id_foreign');
        });
    }
};
