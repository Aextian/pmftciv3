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
        Schema::table('college_offered_subjects', function (Blueprint $table) {
            $table->foreign(['curr_id'])->references(['id'])->on('college_curricula')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['curr_program_id'])->references(['id'])->on('college_curriculum_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['curr_subject_id'])->references(['id'])->on('college_curriculum_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['program_id'])->references(['id'])->on('college_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['subject_id'])->references(['id'])->on('college_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('college_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['yr_lvl_id'])->references(['id'])->on('college_year_levels')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_offered_subjects', function (Blueprint $table) {
            $table->dropForeign('college_offered_subjects_curr_id_foreign');
            $table->dropForeign('college_offered_subjects_curr_program_id_foreign');
            $table->dropForeign('college_offered_subjects_curr_subject_id_foreign');
            $table->dropForeign('college_offered_subjects_program_id_foreign');
            $table->dropForeign('college_offered_subjects_sem_id_foreign');
            $table->dropForeign('college_offered_subjects_subject_id_foreign');
            $table->dropForeign('college_offered_subjects_sy_id_foreign');
            $table->dropForeign('college_offered_subjects_yr_lvl_id_foreign');
        });
    }
};
