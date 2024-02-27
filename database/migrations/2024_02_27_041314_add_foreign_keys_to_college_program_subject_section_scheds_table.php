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
        Schema::table('college_program_subject_section_scheds', function (Blueprint $table) {
            $table->foreign(['program_id'])->references(['id'])->on('college_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['progsubsec_id'])->references(['id'])->on('college_program_subject_sections')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['section_id'])->references(['id'])->on('college_sections')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['subject_id'])->references(['id'])->on('college_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_program_subject_section_scheds', function (Blueprint $table) {
            $table->dropForeign('college_program_subject_section_scheds_program_id_foreign');
            $table->dropForeign('college_program_subject_section_scheds_progsubsec_id_foreign');
            $table->dropForeign('college_program_subject_section_scheds_section_id_foreign');
            $table->dropForeign('college_program_subject_section_scheds_subject_id_foreign');
        });
    }
};
