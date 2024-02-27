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
        Schema::create('shs_student_quizzes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('quiz_id')->nullable()->index('shs_student_quizzes_quiz_id_foreign');
            $table->unsignedBigInteger('std_id')->nullable()->index('shs_student_quizzes_std_id_foreign');
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
        Schema::dropIfExists('shs_student_quizzes');
    }
};