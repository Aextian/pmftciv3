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
        Schema::create('shs_student_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('std_id')->nullable()->index('shs_student_notes_std_id_foreign');
            $table->unsignedBigInteger('lesson_id')->nullable()->index('shs_student_notes_lesson_id_foreign');
            $table->unsignedBigInteger('subject_id')->nullable()->index('shs_student_notes_subject_id_foreign');
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
        Schema::dropIfExists('shs_student_notes');
    }
};
