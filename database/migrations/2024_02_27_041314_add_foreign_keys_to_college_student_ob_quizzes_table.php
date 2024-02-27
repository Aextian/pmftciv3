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
        Schema::table('college_student_ob_quizzes', function (Blueprint $table) {
            $table->foreign(['obquiz_id'])->references(['id'])->on('college_ob_quizzes')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_prog_id'])->references(['id'])->on('college_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
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
        Schema::table('college_student_ob_quizzes', function (Blueprint $table) {
            $table->dropForeign('college_student_ob_quizzes_obquiz_id_foreign');
            $table->dropForeign('college_student_ob_quizzes_std_prog_id_foreign');
            $table->dropForeign('college_student_ob_quizzes_tpss_id_foreign');
        });
    }
};
