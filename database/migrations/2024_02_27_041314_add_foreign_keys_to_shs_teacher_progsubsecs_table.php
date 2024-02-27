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
        Schema::table('shs_teacher_progsubsecs', function (Blueprint $table) {
            $table->foreign(['progsubsec_id'])->references(['id'])->on('shs_program_subject_sections')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('shs_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['strand_id'])->references(['id'])->on('shs_strands')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['subject_id'])->references(['id'])->on('shs_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('shs_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['teacher_id'])->references(['id'])->on('teachers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_teacher_progsubsecs', function (Blueprint $table) {
            $table->dropForeign('shs_teacher_progsubsecs_progsubsec_id_foreign');
            $table->dropForeign('shs_teacher_progsubsecs_sem_id_foreign');
            $table->dropForeign('shs_teacher_progsubsecs_strand_id_foreign');
            $table->dropForeign('shs_teacher_progsubsecs_subject_id_foreign');
            $table->dropForeign('shs_teacher_progsubsecs_sy_id_foreign');
            $table->dropForeign('shs_teacher_progsubsecs_teacher_id_foreign');
        });
    }
};
