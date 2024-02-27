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
        Schema::table('college_lesson_reviews', function (Blueprint $table) {
            $table->foreign(['lesson_id'])->references(['id'])->on('college_teacher_subject_lessons')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['lesson_sched_id'])->references(['id'])->on('college_teacher_subject_lesson_scheds')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('college_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['teacher_id'])->references(['id'])->on('teachers')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['tpss_id'])->references(['id'])->on('college_teacher_progsubsecs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['user_id'])->references(['id'])->on('colleges')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_lesson_reviews', function (Blueprint $table) {
            $table->dropForeign('college_lesson_reviews_lesson_id_foreign');
            $table->dropForeign('college_lesson_reviews_lesson_sched_id_foreign');
            $table->dropForeign('college_lesson_reviews_sem_id_foreign');
            $table->dropForeign('college_lesson_reviews_sy_id_foreign');
            $table->dropForeign('college_lesson_reviews_teacher_id_foreign');
            $table->dropForeign('college_lesson_reviews_tpss_id_foreign');
            $table->dropForeign('college_lesson_reviews_user_id_foreign');
        });
    }
};
