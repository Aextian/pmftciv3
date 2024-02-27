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
        Schema::table('college_tutorial_subject_exams', function (Blueprint $table) {
            $table->foreign(['ctts_id'])->references(['id'])->on('college_teacher_tutorial_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_tutorial_subject_exams', function (Blueprint $table) {
            $table->dropForeign('college_tutorial_subject_exams_ctts_id_foreign');
        });
    }
};
