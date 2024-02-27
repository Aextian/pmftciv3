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
        Schema::create('shs_teacher_lesson_attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('shs_teacher_lesson_attendances_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('shs_teacher_lesson_attendances_sem_id_foreign');
            $table->unsignedBigInteger('teacher_id')->nullable()->index('shs_teacher_lesson_attendances_teacher_id_foreign');
            $table->unsignedBigInteger('lesson_id')->nullable()->index('shs_teacher_lesson_attendances_lesson_id_foreign');
            $table->unsignedBigInteger('lesson_sched_id')->nullable()->index('shs_teacher_lesson_attendances_lesson_sched_id_foreign');
            $table->time('lesson_start_time')->nullable();
            $table->time('lesson_end_time')->nullable();
            $table->time('time_in')->nullable();
            $table->time('time_out')->nullable();
            $table->date('lesson_date')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('shs_teacher_lesson_attendances');
    }
};
