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
        Schema::table('college_ob_quiz_schedules', function (Blueprint $table) {
            $table->foreign(['lesson_sched_id'])->references(['id'])->on('college_teacher_subject_lesson_scheds')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['obquiz_id'])->references(['id'])->on('college_ob_quizzes')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_ob_quiz_schedules', function (Blueprint $table) {
            $table->dropForeign('college_ob_quiz_schedules_lesson_sched_id_foreign');
            $table->dropForeign('college_ob_quiz_schedules_obquiz_id_foreign');
        });
    }
};
