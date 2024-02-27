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
        Schema::create('shs_lesson_schedule_quizzes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('quiz_id')->nullable()->index('shs_lesson_schedule_quizzes_quiz_id_foreign');
            $table->unsignedBigInteger('lesson_sched_id')->nullable()->index('shs_lesson_schedule_quizzes_lesson_sched_id_foreign');
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
        Schema::dropIfExists('shs_lesson_schedule_quizzes');
    }
};
