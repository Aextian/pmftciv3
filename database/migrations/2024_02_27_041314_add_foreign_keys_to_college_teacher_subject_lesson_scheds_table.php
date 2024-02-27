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
        Schema::table('college_teacher_subject_lesson_scheds', function (Blueprint $table) {
            $table->foreign(['lesson_id'])->references(['id'])->on('college_teacher_subject_lessons')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_teacher_subject_lesson_scheds', function (Blueprint $table) {
            $table->dropForeign('college_teacher_subject_lesson_scheds_lesson_id_foreign');
        });
    }
};
