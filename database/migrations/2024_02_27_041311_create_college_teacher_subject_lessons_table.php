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
        Schema::create('college_teacher_subject_lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_teacher_subject_lessons_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_teacher_subject_lessons_sem_id_foreign');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('college_teacher_subject_lessons_tpss_id_foreign');
            $table->unsignedBigInteger('grading_period_id')->nullable()->index('college_teacher_subject_lessons_grading_period_id_foreign');
            $table->string('title');
            $table->mediumText('short_desc')->nullable();
            $table->longText('content');
            $table->string('downloadable_link')->nullable();
            $table->enum('status', ['draft', 'unpublished', 'published'])->default('draft');
            $table->integer('attendance_points')->default(0);
            $table->integer('late_points')->default(0);
            $table->integer('behavior_points')->default(0);
            $table->integer('recitation_points')->default(0);
            $table->integer('note_points')->default(0);
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
        Schema::dropIfExists('college_teacher_subject_lessons');
    }
};
