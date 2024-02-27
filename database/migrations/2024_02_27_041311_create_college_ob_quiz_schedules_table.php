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
        Schema::create('college_ob_quiz_schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('obquiz_id')->nullable()->index('college_ob_quiz_schedules_obquiz_id_foreign');
            $table->unsignedBigInteger('lesson_sched_id')->nullable()->index('college_ob_quiz_schedules_lesson_sched_id_foreign');
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
        Schema::dropIfExists('college_ob_quiz_schedules');
    }
};
