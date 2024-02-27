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
        Schema::create('college_ob_quizzes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('college_ob_quizzes_tpss_id_foreign');
            $table->unsignedBigInteger('grading_period_id')->nullable()->index('college_ob_quizzes_grading_period_id_foreign');
            $table->unsignedBigInteger('lesson_id')->nullable()->index('college_ob_quizzes_lesson_id_foreign');
            $table->string('title');
            $table->integer('points')->default(1);
            $table->longText('question');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
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
        Schema::dropIfExists('college_ob_quizzes');
    }
};
