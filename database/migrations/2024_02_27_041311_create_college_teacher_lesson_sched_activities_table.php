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
        Schema::create('college_teacher_lesson_sched_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('college_teacher_lesson_sched_activities_tpss_id_foreign');
            $table->unsignedBigInteger('lesson_id')->nullable()->index('college_teacher_lesson_sched_activities_lesson_id_foreign');
            $table->unsignedBigInteger('lesson_sched_id')->nullable()->index('college_teacher_lesson_sched_activities_lesson_sched_id_foreign');
            $table->unsignedBigInteger('gp_id')->nullable()->index('college_teacher_lesson_sched_activities_gp_id_foreign');
            $table->string('title');
            $table->integer('activity_points');
            $table->longText('content');
            $table->time('start_time');
            $table->time('end_time');
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
        Schema::dropIfExists('college_teacher_lesson_sched_activities');
    }
};
