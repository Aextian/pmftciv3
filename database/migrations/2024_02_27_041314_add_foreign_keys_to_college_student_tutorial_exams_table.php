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
        Schema::table('college_student_tutorial_exams', function (Blueprint $table) {
            $table->foreign(['exam_id'])->references(['id'])->on('college_tutorial_subject_exams')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_id'])->references(['id'])->on('college_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_student_tutorial_exams', function (Blueprint $table) {
            $table->dropForeign('college_student_tutorial_exams_exam_id_foreign');
            $table->dropForeign('college_student_tutorial_exams_std_id_foreign');
        });
    }
};
