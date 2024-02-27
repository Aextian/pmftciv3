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
        Schema::create('shs_student_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('shs_student_subjects_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('shs_student_subjects_sem_id_foreign');
            $table->unsignedBigInteger('yrlvl_id')->nullable()->index('shs_student_subjects_yrlvl_id_foreign');
            $table->unsignedBigInteger('strand_id')->nullable()->index('shs_student_subjects_strand_id_foreign');
            $table->unsignedBigInteger('std_program_id')->nullable()->index('shs_student_subjects_std_program_id_foreign');
            $table->unsignedBigInteger('std_id')->nullable()->index('shs_student_subjects_std_id_foreign');
            $table->unsignedBigInteger('user_id')->nullable()->index('shs_student_subjects_user_id_foreign');
            $table->unsignedBigInteger('section_id')->nullable()->index('shs_student_subjects_section_id_foreign');
            $table->unsignedBigInteger('offered_subject_id')->nullable()->index('shs_student_subjects_offered_subject_id_foreign');
            $table->unsignedBigInteger('subject_id')->nullable()->index('shs_student_subjects_subject_id_foreign');
            $table->enum('irreg_subject_status', ['overload', 'retake', 'overload_retake'])->nullable();
            $table->integer('is_cleared')->default(0);
            $table->mediumText('clearance_remark')->nullable();
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
        Schema::dropIfExists('shs_student_subjects');
    }
};
