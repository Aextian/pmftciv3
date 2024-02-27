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
        Schema::table('shs_program_subject_sections', function (Blueprint $table) {
            $table->foreign(['offered_subject_id'])->references(['id'])->on('shs_offered_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['section_id'])->references(['id'])->on('shs_sections')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('shs_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['strand_id'])->references(['id'])->on('shs_strands')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['subject_id'])->references(['id'])->on('shs_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('shs_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['yr_lvl_id'])->references(['id'])->on('shs_year_levels')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_program_subject_sections', function (Blueprint $table) {
            $table->dropForeign('shs_program_subject_sections_offered_subject_id_foreign');
            $table->dropForeign('shs_program_subject_sections_section_id_foreign');
            $table->dropForeign('shs_program_subject_sections_sem_id_foreign');
            $table->dropForeign('shs_program_subject_sections_strand_id_foreign');
            $table->dropForeign('shs_program_subject_sections_subject_id_foreign');
            $table->dropForeign('shs_program_subject_sections_sy_id_foreign');
            $table->dropForeign('shs_program_subject_sections_yr_lvl_id_foreign');
        });
    }
};
