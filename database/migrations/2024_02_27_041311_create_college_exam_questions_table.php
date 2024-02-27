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
        Schema::create('college_exam_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quiz_question_id')->nullable();
            $table->unsignedBigInteger('exam_id')->nullable()->index('college_exam_questions_exam_id_foreign');
            $table->enum('type', ['multiple_choice', 'multiple_choice_img', 'true_false'])->default('multiple_choice');
            $table->enum('category', ['easy', 'moderate', 'hard'])->nullable();
            $table->longText('question');
            $table->mediumText('correct_answer');
            $table->mediumText('answer_1')->nullable();
            $table->mediumText('answer_img_1')->nullable();
            $table->mediumText('answer_2')->nullable();
            $table->mediumText('answer_img_2')->nullable();
            $table->mediumText('answer_3')->nullable();
            $table->mediumText('answer_img_3')->nullable();
            $table->mediumText('answer_4')->nullable();
            $table->mediumText('answer_img_4')->nullable();
            $table->integer('points')->default(1);
            $table->integer('q_time')->nullable();
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
        Schema::dropIfExists('college_exam_questions');
    }
};
