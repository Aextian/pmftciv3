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
        Schema::table('shs_program_subject_section_scheds', function (Blueprint $table) {
            $table->foreign(['progsubsec_id'])->references(['id'])->on('shs_program_subject_sections')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['section_id'])->references(['id'])->on('shs_sections')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['strand_id'])->references(['id'])->on('shs_strands')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['subject_id'])->references(['id'])->on('shs_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_program_subject_section_scheds', function (Blueprint $table) {
            $table->dropForeign('shs_program_subject_section_scheds_progsubsec_id_foreign');
            $table->dropForeign('shs_program_subject_section_scheds_section_id_foreign');
            $table->dropForeign('shs_program_subject_section_scheds_strand_id_foreign');
            $table->dropForeign('shs_program_subject_section_scheds_subject_id_foreign');
        });
    }
};
