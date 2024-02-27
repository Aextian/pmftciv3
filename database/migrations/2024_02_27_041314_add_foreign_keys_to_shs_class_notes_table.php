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
        Schema::table('shs_class_notes', function (Blueprint $table) {
            $table->foreign(['lesson_id'])->references(['id'])->on('shs_teacher_progsubsec_lessons')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['lesson_sched_id'])->references(['id'])->on('shs_progsubsec_lesson_scheds')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_id'])->references(['id'])->on('shs_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
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
        Schema::table('shs_class_notes', function (Blueprint $table) {
            $table->dropForeign('shs_class_notes_lesson_id_foreign');
            $table->dropForeign('shs_class_notes_lesson_sched_id_foreign');
            $table->dropForeign('shs_class_notes_std_id_foreign');
            $table->dropForeign('shs_class_notes_teacher_id_foreign');
        });
    }
};
