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
        Schema::table('college_teacher_tutorial_lessons', function (Blueprint $table) {
            $table->foreign(['ctts_id'])->references(['id'])->on('college_teacher_tutorial_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['grading_period_id'])->references(['id'])->on('college_grading_periods')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('college_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_teacher_tutorial_lessons', function (Blueprint $table) {
            $table->dropForeign('college_teacher_tutorial_lessons_ctts_id_foreign');
            $table->dropForeign('college_teacher_tutorial_lessons_grading_period_id_foreign');
            $table->dropForeign('college_teacher_tutorial_lessons_sem_id_foreign');
            $table->dropForeign('college_teacher_tutorial_lessons_sy_id_foreign');
        });
    }
};
