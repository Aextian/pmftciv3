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
        Schema::table('college_student_tutorial_subjects', function (Blueprint $table) {
            $table->foreign(['curr_id'])->references(['id'])->on('college_curricula')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['curr_subject_id'])->references(['id'])->on('college_curriculum_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['program_id'])->references(['id'])->on('college_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['section_id'])->references(['id'])->on('college_sections')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_id'])->references(['id'])->on('college_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_program_id'])->references(['id'])->on('college_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['subject_id'])->references(['id'])->on('college_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('college_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['user_id'])->references(['id'])->on('colleges')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['yrlvl_id'])->references(['id'])->on('college_year_levels')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_student_tutorial_subjects', function (Blueprint $table) {
            $table->dropForeign('college_student_tutorial_subjects_curr_id_foreign');
            $table->dropForeign('college_student_tutorial_subjects_curr_subject_id_foreign');
            $table->dropForeign('college_student_tutorial_subjects_program_id_foreign');
            $table->dropForeign('college_student_tutorial_subjects_section_id_foreign');
            $table->dropForeign('college_student_tutorial_subjects_sem_id_foreign');
            $table->dropForeign('college_student_tutorial_subjects_std_id_foreign');
            $table->dropForeign('college_student_tutorial_subjects_std_program_id_foreign');
            $table->dropForeign('college_student_tutorial_subjects_subject_id_foreign');
            $table->dropForeign('college_student_tutorial_subjects_sy_id_foreign');
            $table->dropForeign('college_student_tutorial_subjects_user_id_foreign');
            $table->dropForeign('college_student_tutorial_subjects_yrlvl_id_foreign');
        });
    }
};
