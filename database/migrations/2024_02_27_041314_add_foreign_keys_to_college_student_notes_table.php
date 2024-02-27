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
        Schema::table('college_student_notes', function (Blueprint $table) {
            $table->foreign(['lesson_id'])->references(['id'])->on('college_teacher_subject_lessons')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_id'])->references(['id'])->on('college_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
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
        Schema::table('college_student_notes', function (Blueprint $table) {
            $table->dropForeign('college_student_notes_lesson_id_foreign');
            $table->dropForeign('college_student_notes_std_id_foreign');
            $table->dropForeign('college_student_notes_subject_id_foreign');
        });
    }
};
