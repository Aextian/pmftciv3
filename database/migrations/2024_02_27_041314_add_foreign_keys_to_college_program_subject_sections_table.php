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
        Schema::table('college_program_subject_sections', function (Blueprint $table) {
            $table->foreign(['offered_subject_id'])->references(['id'])->on('college_offered_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['program_id'])->references(['id'])->on('college_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['section_id'])->references(['id'])->on('college_sections')->onUpdate('NO ACTION')->onDelete('CASCADE');
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
        Schema::table('college_program_subject_sections', function (Blueprint $table) {
            $table->dropForeign('college_program_subject_sections_offered_subject_id_foreign');
            $table->dropForeign('college_program_subject_sections_program_id_foreign');
            $table->dropForeign('college_program_subject_sections_section_id_foreign');
            $table->dropForeign('college_program_subject_sections_sem_id_foreign');
            $table->dropForeign('college_program_subject_sections_subject_id_foreign');
            $table->dropForeign('college_program_subject_sections_sy_id_foreign');
            $table->dropForeign('college_program_subject_sections_yr_lvl_id_foreign');
        });
    }
};
