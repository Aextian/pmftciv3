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
        Schema::create('college_class_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('std_id')->nullable()->index('college_class_notes_std_id_foreign');
            $table->unsignedBigInteger('lesson_id')->nullable()->index('college_class_notes_lesson_id_foreign');
            $table->unsignedBigInteger('lesson_sched_id')->nullable()->index('college_class_notes_lesson_sched_id_foreign');
            $table->unsignedBigInteger('teacher_id')->nullable()->index('college_class_notes_teacher_id_foreign');
            $table->integer('grade')->default(0);
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
        Schema::dropIfExists('college_class_notes');
    }
};
