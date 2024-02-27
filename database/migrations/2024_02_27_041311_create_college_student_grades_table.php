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
        Schema::create('college_student_grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_student_grades_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_student_grades_sem_id_foreign');
            $table->unsignedBigInteger('grading_period_id')->nullable()->index('college_student_grades_grading_period_id_foreign');
            $table->unsignedBigInteger('std_id')->nullable()->index('college_student_grades_std_id_foreign');
            $table->unsignedBigInteger('college_student_subject_id')->nullable()->index('college_student_grades_college_student_subject_id_foreign');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('college_student_grades_tpss_id_foreign');
            $table->decimal('cp_grade', 4)->default(0);
            $table->decimal('exam_grade', 4)->default(0);
            $table->decimal('period_grade', 5)->default(0);
            $table->decimal('requested_grade', 5)->default(0);
            $table->longText('grade_history')->nullable();
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
        Schema::dropIfExists('college_student_grades');
    }
};
