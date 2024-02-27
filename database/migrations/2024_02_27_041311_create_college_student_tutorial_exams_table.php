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
        Schema::create('college_student_tutorial_exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('exam_id')->nullable()->index('college_student_tutorial_exams_exam_id_foreign');
            $table->unsignedBigInteger('std_id')->nullable()->index('college_student_tutorial_exams_std_id_foreign');
            $table->integer('right_answer')->default(0);
            $table->integer('wrong_answer')->default(0);
            $table->integer('unanswered')->default(0);
            $table->longText('q_order')->nullable();
            $table->longText('answers')->nullable();
            $table->integer('current_question_id')->nullable();
            $table->dateTime('start_take_time')->nullable();
            $table->dateTime('end_take_time')->nullable();
            $table->integer('is_submitted')->default(0);
            $table->integer('is_generated')->default(0);
            $table->dateTime('generated_start_time')->nullable();
            $table->dateTime('generated_end_time')->nullable();
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
        Schema::dropIfExists('college_student_tutorial_exams');
    }
};
