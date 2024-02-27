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
        Schema::create('college_teacher_lesson_attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_teacher_lesson_attendances_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_teacher_lesson_attendances_sem_id_foreign');
            $table->unsignedBigInteger('teacher_id')->nullable()->index('college_teacher_lesson_attendances_teacher_id_foreign');
            $table->unsignedBigInteger('lesson_id')->nullable()->index('college_teacher_lesson_attendances_lesson_id_foreign');
            $table->unsignedBigInteger('lesson_sched_id')->nullable()->index('college_teacher_lesson_attendances_lesson_sched_id_foreign');
            $table->date('sched_date')->nullable();
            $table->time('sched_start')->nullable();
            $table->time('sched_end')->nullable();
            $table->time('time_in')->nullable();
            $table->time('time_out')->nullable();
            $table->integer('remark')->default(0);
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
        Schema::dropIfExists('college_teacher_lesson_attendances');
    }
};
