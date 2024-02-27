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
        Schema::table('shs_teacher_lesson_sched_activities', function (Blueprint $table) {
            $table->foreign(['lesson_id'])->references(['id'])->on('shs_teacher_progsubsec_lessons')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['lesson_sched_id'])->references(['id'])->on('shs_progsubsec_lesson_scheds')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['quarter_id'])->references(['id'])->on('shs_quarters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['tpss_id'])->references(['id'])->on('shs_teacher_progsubsecs')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_teacher_lesson_sched_activities', function (Blueprint $table) {
            $table->dropForeign('shs_teacher_lesson_sched_activities_lesson_id_foreign');
            $table->dropForeign('shs_teacher_lesson_sched_activities_lesson_sched_id_foreign');
            $table->dropForeign('shs_teacher_lesson_sched_activities_quarter_id_foreign');
            $table->dropForeign('shs_teacher_lesson_sched_activities_tpss_id_foreign');
        });
    }
};
