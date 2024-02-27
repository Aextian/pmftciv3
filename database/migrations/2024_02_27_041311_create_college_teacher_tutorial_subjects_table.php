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
        Schema::create('college_teacher_tutorial_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_teacher_tutorial_subjects_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_teacher_tutorial_subjects_sem_id_foreign');
            $table->unsignedBigInteger('curr_id')->nullable()->index('college_teacher_tutorial_subjects_curr_id_foreign');
            $table->unsignedBigInteger('program_id')->nullable()->index('college_teacher_tutorial_subjects_program_id_foreign');
            $table->unsignedBigInteger('yrlvl_id')->nullable()->index('college_teacher_tutorial_subjects_yrlvl_id_foreign');
            $table->unsignedBigInteger('subject_id')->nullable()->index('college_teacher_tutorial_subjects_subject_id_foreign');
            $table->unsignedBigInteger('curr_subject_id')->nullable()->index('college_teacher_tutorial_subjects_curr_subject_id_foreign');
            $table->unsignedBigInteger('section_id')->nullable()->index('college_teacher_tutorial_subjects_section_id_foreign');
            $table->unsignedBigInteger('tutorial_subj_sec_id')->nullable()->index('college_teacher_tutorial_subjects_tutorial_subj_sec_id_foreign');
            $table->unsignedBigInteger('teacher_id')->nullable()->index('college_teacher_tutorial_subjects_teacher_id_foreign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('college_teacher_tutorial_subjects');
    }
};
