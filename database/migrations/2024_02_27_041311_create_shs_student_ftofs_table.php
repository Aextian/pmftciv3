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
        Schema::create('shs_student_ftofs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('shs_student_ftofs_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('shs_student_ftofs_sem_id_foreign');
            $table->unsignedBigInteger('lesson_id')->nullable()->index('shs_student_ftofs_lesson_id_foreign');
            $table->unsignedBigInteger('lesson_sched_id')->nullable()->index('shs_student_ftofs_lesson_sched_id_foreign');
            $table->longText('std_id')->nullable();
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
        Schema::dropIfExists('shs_student_ftofs');
    }
};
