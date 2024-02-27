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
        Schema::create('college_subject_quizzes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('college_subject_quizzes_tpss_id_foreign');
            $table->unsignedBigInteger('grading_period_id')->nullable()->index('college_subject_quizzes_grading_period_id_foreign');
            $table->unsignedBigInteger('lesson_id')->nullable()->index('college_subject_quizzes_lesson_id_foreign');
            $table->string('title');
            $table->mediumText('instruction')->nullable();
            $table->enum('timer_used', ['test_timer', 'question_timer'])->default('test_timer');
            $table->integer('time')->nullable();
            $table->integer('question_count')->default(5);
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->boolean('show_result')->default(false);
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
        Schema::dropIfExists('college_subject_quizzes');
    }
};
