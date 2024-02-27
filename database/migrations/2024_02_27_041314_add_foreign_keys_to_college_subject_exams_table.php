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
        Schema::table('college_subject_exams', function (Blueprint $table) {
            $table->foreign(['grading_period_id'])->references(['id'])->on('college_grading_periods')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['tpss_id'])->references(['id'])->on('college_teacher_progsubsecs')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_subject_exams', function (Blueprint $table) {
            $table->dropForeign('college_subject_exams_grading_period_id_foreign');
            $table->dropForeign('college_subject_exams_tpss_id_foreign');
        });
    }
};
