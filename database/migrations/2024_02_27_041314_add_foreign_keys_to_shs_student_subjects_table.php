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
        Schema::table('shs_student_subjects', function (Blueprint $table) {
            $table->foreign(['offered_subject_id'])->references(['id'])->on('shs_offered_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['section_id'])->references(['id'])->on('shs_sections')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('shs_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_id'])->references(['id'])->on('shs_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_program_id'])->references(['id'])->on('shs_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['strand_id'])->references(['id'])->on('shs_strands')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['subject_id'])->references(['id'])->on('shs_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('shs_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['user_id'])->references(['id'])->on('senior_highs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['yrlvl_id'])->references(['id'])->on('shs_year_levels')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_student_subjects', function (Blueprint $table) {
            $table->dropForeign('shs_student_subjects_offered_subject_id_foreign');
            $table->dropForeign('shs_student_subjects_section_id_foreign');
            $table->dropForeign('shs_student_subjects_sem_id_foreign');
            $table->dropForeign('shs_student_subjects_std_id_foreign');
            $table->dropForeign('shs_student_subjects_std_program_id_foreign');
            $table->dropForeign('shs_student_subjects_strand_id_foreign');
            $table->dropForeign('shs_student_subjects_subject_id_foreign');
            $table->dropForeign('shs_student_subjects_sy_id_foreign');
            $table->dropForeign('shs_student_subjects_user_id_foreign');
            $table->dropForeign('shs_student_subjects_yrlvl_id_foreign');
        });
    }
};
