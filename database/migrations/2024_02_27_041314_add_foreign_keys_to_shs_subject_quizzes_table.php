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
        Schema::table('shs_subject_quizzes', function (Blueprint $table) {
            $table->foreign(['lesson_id'])->references(['id'])->on('shs_teacher_progsubsec_lessons')->onUpdate('NO ACTION')->onDelete('CASCADE');
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
        Schema::table('shs_subject_quizzes', function (Blueprint $table) {
            $table->dropForeign('shs_subject_quizzes_lesson_id_foreign');
            $table->dropForeign('shs_subject_quizzes_quarter_id_foreign');
            $table->dropForeign('shs_subject_quizzes_tpss_id_foreign');
        });
    }
};
