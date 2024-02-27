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
        Schema::table('college_subject_quizzes', function (Blueprint $table) {
            $table->foreign(['grading_period_id'])->references(['id'])->on('college_grading_periods')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['lesson_id'])->references(['id'])->on('college_teacher_subject_lessons')->onUpdate('NO ACTION')->onDelete('CASCADE');
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
        Schema::table('college_subject_quizzes', function (Blueprint $table) {
            $table->dropForeign('college_subject_quizzes_grading_period_id_foreign');
            $table->dropForeign('college_subject_quizzes_lesson_id_foreign');
            $table->dropForeign('college_subject_quizzes_tpss_id_foreign');
        });
    }
};
