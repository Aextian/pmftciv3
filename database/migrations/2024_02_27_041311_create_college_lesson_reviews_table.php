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
        Schema::create('college_lesson_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_lesson_reviews_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_lesson_reviews_sem_id_foreign');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('college_lesson_reviews_tpss_id_foreign');
            $table->unsignedBigInteger('teacher_id')->nullable()->index('college_lesson_reviews_teacher_id_foreign');
            $table->unsignedBigInteger('lesson_id')->nullable()->index('college_lesson_reviews_lesson_id_foreign');
            $table->unsignedBigInteger('lesson_sched_id')->nullable()->index('college_lesson_reviews_lesson_sched_id_foreign');
            $table->unsignedBigInteger('user_id')->nullable()->index('college_lesson_reviews_user_id_foreign');
            $table->integer('rate')->default(0);
            $table->mediumText('commment')->nullable();
            $table->integer('is_valid')->default(0);
            $table->enum('status', ['valid', 'invalid'])->default('valid');
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
        Schema::dropIfExists('college_lesson_reviews');
    }
};
