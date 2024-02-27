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
        Schema::table('shs_exam_rechecks', function (Blueprint $table) {
            $table->foreign(['exam_id'])->references(['id'])->on('shs_subject_exams')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['question_id'])->references(['id'])->on('shs_exam_questions')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_id'])->references(['id'])->on('shs_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_exam_rechecks', function (Blueprint $table) {
            $table->dropForeign('shs_exam_rechecks_exam_id_foreign');
            $table->dropForeign('shs_exam_rechecks_question_id_foreign');
            $table->dropForeign('shs_exam_rechecks_std_id_foreign');
        });
    }
};
